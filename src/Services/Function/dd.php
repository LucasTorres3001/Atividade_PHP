<?php
    /**
     * User: LUcas Torres
     * Date: 07/07/2022
     * Time: 17:56
     */
    namespace Src\Services\Function;
    /**
     * Die and dump
     *
     * @param mixed $param
     * @return void
     */
    function dd(mixed $param): void
    {
        echo "<pre>";
            var_dump($param);
        echo "</pre>";
        die;
    }