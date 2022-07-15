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
            $_POST['id'], strip_tags($_POST['upFname']), strip_tags($_POST['upLname']), NULL,
            strip_tags($_POST['upEmail']), strip_tags($_POST['upPass']), NULL, NULL, NULL,
            Upload::imageUpload($_FILES['upImage']), strip_tags($_POST['upMsg'])
        );
        $user = User::update($users);
        if ($user->rowCount() > 0)
        {
            $_SESSION['msg'] = '<script>alert("Datas successfully updated.");</script>';
            Redirect::to(
                '../../../View/pages/html/dashboard'
            );
        } else
        {
            $_SESSION['msg'] = '<script>alert("Datas cannot to be updated.");</script>';
            Redirect::to(
                '../../../View/pages/html/dashboard'
            );
        }
    } catch (Exception $ex)
    {
        $_SESSION['msg'] = "<script>alert('{$ex->getMessage()}');</script>";
        Redirect::to(
            '../../../View/pages/html/edit'
        );
    }