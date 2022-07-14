<?php

    use Src\App\Core\Redirect;
    use Src\Database\Entity\Users;
    use Src\Model\Web;

    session_start();

    include '../../../../vendor/autoload.php';

    try
    {
        $users = new Users(
            NULL, NULL, NULL, NULL, strip_tags($_POST['logEmail']),
            strip_tags($_POST['logPass']), NULL, NULL, NULL, NULL, NULL
        );
        $web = Web::login($users);
        if ($web->rowCount() > 0)
        {
            $_SESSION['insert'] = '<h2>Search by user</h2>';
            Redirect::to(
                '../../../View/pages/html/welcome'
            );
        } else
        {
            $_SESSION['insert'] = '<script>alert("Unregistered user.");</script>';
            Redirect::to(
                '../../../View/pages/html/create'
            );
        }
    } catch (Exception $ex)
    {
        $_SESSION['insert'] = "<span style='color: red;'>{$ex->getMessage()}</span>";
        Redirect::to(
            '../../../View/pages/html/login'
        );
    }