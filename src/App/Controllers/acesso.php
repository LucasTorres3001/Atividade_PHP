<?php

    use Src\App\Core\Redirect;

    session_start();

    include 'C:/xampp/htdocs/Folder/vendor/autoload.php';

    if (!isset($_SESSION['insert']))
    {
        $_SESSION['insert'] = '<script>alert("To access the site the user must be registered.");</script>';
        Redirect::to(
            '../../../View/pages/html/login'
        );
    }