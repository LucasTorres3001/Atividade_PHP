<?php

    use Src\Model\Web;

    include_once '../../../../vendor/autoload.php';

    $users = Web::dashboard();
    $n = 1;