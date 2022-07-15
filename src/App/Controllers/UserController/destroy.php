<?php

    use Src\App\Core\Redirect;
    use Src\Database\Entity\Users;
    use Src\Model\User;

    session_start();

    include '../../../../vendor/autoload.php';

    if (!empty($_GET['id_user']))
    {
        $id = $_GET['id_user'];
        $users = new Users(
            $id, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
        );
        $user = User::delete($users);
        if ($user->rowCount() > 0)
        {
            $_SESSION['msg'] = '<script>alert("User successfully deleted.")</script>';
            Redirect::to(
                '../../../View/pages/html/dashboard'
            );
        } else
        {
            $_SESSION['msg'] = '<script>alert("User cannot to be deleted.")</script>';
            Redirect::to(
                '../../../View/pages/html/dashboard'
            );
        }
    }