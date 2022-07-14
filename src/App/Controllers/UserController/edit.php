<?php

    use Src\Database\Entity\Users;
    use Src\Model\User;

    include_once '../../../../vendor/autoload.php';

    if (!empty($_GET['id_user']))
    {
        $id = $_GET['id_user'];
        $users = new Users(
            $id, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
        );
        $user = User::read($users);
        foreach ($user as $data)
        {
            $firstName = $data['firstName'];
            $lastName = $data['lastName'];
            $email = $data['email'];
            $password = $data['password'];
            $message = $data['message'];
            $name = $data['firstName'];
            $surname = $data['lastName'];
        }
    }