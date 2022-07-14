<?php

    use Src\Model\Web;

    include '../../../../vendor/autoload.php';

    if (!empty($_GET['search']))
    {
        $username = $_GET['search'];
        $search = "%".trim($username)."%";
        $users = Web::where($search);
    } else
    {
        $users = Web::all();
    }