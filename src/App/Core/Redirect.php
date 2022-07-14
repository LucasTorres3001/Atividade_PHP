<?php
    /**
     * User: Lucas Torres
     * Date: 02/07/2022
     * Time: 16:10
     */
    namespace Src\App\Core;
    /**
     * Redirect class
     * 
     * @final
     * @static
     * @author Lucas Torres <l.torres3001.lt@gmail.com>
     */
    final class Redirect
    {
        /**
         * To view
         *
         * @final
         * @method void to()
         * @static
         * @param string $path
         * @return void
         */
        final public static function to(string $path): void
        {
            header(
                "Location: {$path}.php"
            );
            die;
        }
    }