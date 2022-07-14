<?php
    /**
     * User: Lucas Torres
     * Date: 14/07/2022
     * Time: 13:52
     */
    namespace Src\Services\Function;
    /**
     * Website header
     *
     * @param string $title
     * @return void
     */
    function head(string $title): void
    {
        include 'C:/xampp/htdocs/Folder/src/View/pages/layout/others/header_ll.php';
            echo "<title>{$title}</title>";
        include 'C:/xampp/htdocs/Folder/src/View/pages/layout/others/header.php';
    }