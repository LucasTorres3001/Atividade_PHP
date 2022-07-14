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
            NULL, strip_tags($_POST['addFname']), strip_tags($_POST['addLname']), strip_tags($_POST['addCpf']),
            strip_tags($_POST['addEmail']), strip_tags($_POST['addPass']), $_POST['addGender'], $_POST['addEth'],
            $_POST['addBirth'], Upload::imageUpload($_FILES['addImage']), strip_tags($_POST['addMsg'])
        );
        $user = User::create($users);
        if ($user->rowCount() > 0)
        {
            $_SESSION['msg'] = '<script>alert("User successfully added.");</script>';
            Redirect::to(
                '../../../View/pages/html/dashboard'
            );
        } else
        {
            $_SESSION['msg'] = '<script>alert("User cannot to be added.");</script>';
            Redirect::to(
                '../../../View/pages/html/dashboard'
            );
        }
    } catch (Exception $ex)
    {
        $_SESSION['msg'] = "<script>alert('{$ex->getMessage()}');</script>";
        Redirect::to(
            '../../../View/pages/html/add'
        );
    }