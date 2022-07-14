<?php
    /**
     * User: Lucas Torres
     * Date: 14/07/2022
     * Time: 12:47
     */
    namespace Src\Services\Function;
    /**
     * Header
     *
     * @param string $title
     * @return void
     */
    function cabecalho(string $title): void
    {
        include 'C:/xampp/htdocs/Folder/src/App/Controllers/acesso.php';

        include 'C:/xampp/htdocs/Folder/src/View/pages/layout/header_II.php';
            echo "<title>{$title}</title>";
        include 'C:/xampp/htdocs/Folder/src/View/pages/layout/header.php';
    }