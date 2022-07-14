<?php

    use Src\Database\Entity\Users;
    use Src\Model\Web;

    include '../../../../vendor/autoload.php';

    if (!empty($_GET['id_user']))
    {
        $id = $_GET['id_user'];
        $users = new Users(
            $id, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
        );
        $user = Web::find($users);
        foreach ($user as $data)
        {
            $name = $data['firstName'];
            $surname = $data['lastName'];
            $email = $data['email'];
            $gender = $data['gender'];
            $ethnicity = $data['ethnicity'];
            $birth = DateTime::createFromFormat('Y-m-d', $data['birth']);
            $image = $data['image'];
            $message = $data['message'];
        }
        $birthday = $birth->format('d/m/Y');
    }