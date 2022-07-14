<?php

    use Src\App\Core\Redirect;

    include_once '../../../../vendor/autoload.php';

    session_start();
    
    session_destroy();
    session_unset();
    Redirect::to(
        '../../../View/pages/html/login'
    );