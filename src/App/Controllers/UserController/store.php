<?php

    use Src\App\Core\Redirect;
    use Src\Database\Entity\Users;
    use Src\Model\User;
    use Src\Services\Upload\Upload;

    session_start();

    include '../../../../vendor/autoload.php';

    try
    {
        $users = new Users(
            NULL, strip_tags($_POST['inFname']), strip_tags($_POST['inLname']), strip_tags($_POST['inCpf']),
            strip_tags($_POST['inEmail']), strip_tags($_POST['inPass']), $_POST['inGender'], $_POST['inEth'],
            $_POST['inBirth'], Upload::imageUpload($_FILES['inImage']), strip_tags($_POST['inMsg'])
        );
        $user = User::create($users);
        if ($user->rowCount() > 0)
        {
            $_SESSION['insert'] = '<script>alert("User successfully registered.");</script>';
            Redirect::to(
                '../../../View/pages/html/login'
            );
        } else
        {
            $_SESSION['insert'] = '<script>alert("User cannot to be registered.");</script>';
            Redirect::to(
                '../../../View/pages/html/login'
            );
        }
    } catch (Exception $ex)
    {
        $_SESSION['insert'] = "<script>alert('{$ex->getMessage()}');</script>";
        Redirect::to(
            '../../../View/pages/html/create'
        );
    }