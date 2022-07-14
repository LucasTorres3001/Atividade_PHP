<?php
    /**
     * User: Lucas Torres
     * Date: 28/06/2022
     * Time: 14:16
     */
    namespace Src\Services\Repository;

    use PDOStatement;
    use Src\Database\Entity\Users;

    include 'C:/xampp/htdocs/Folder/vendor/autoload.php';
    /**
     * Website repository
     * 
     * @abstract
     * @static
     * @author Lucas Torres <l.torres3001.lt@gmail.com>
     */
    interface WebRepository
    {
        /**
         * Dashboard method
         *
         * @abstract
         * @method array|false dashboard()
         * @static
         * @return array|false
         */
        public static function dashboard(): array|false;
        /**
         * all
         *
         * @abstract
         * @method array|false all()
         * @static
         * @return array|false
         */
        public static function all(): array|false;
        /**
         * Login
         *
         * @abstract
         * @method PDOStatement|false login()
         * @static
         * @param Users $users
         * @return PDOStatement|false
         */
        public static function login(Users $users): PDOStatement|false;
        /**
         * Find user ID
         *
         * @abstract
         * @method array|false find()
         * @static
         * @param Users $users
         * @return array|false
         */
        public static function find(Users $users): array|false;
    }