<?php
    /**
     * User: Lucas Torres
     * Date: 28/06/2022
     * Time: 14:14
     */
    namespace Src\Services\Repository;

    use PDOStatement;
    use Src\Database\Entity\Users;

    include 'C:/xampp/htdocs/Folder/vendor/autoload.php';
    /**
     * User repository
     * 
     * @abstract
     * @static
     * @author Lucas Torres <l.torres3001.lt@gmail.com>
     */
    interface UserRepository
    {
        /**
         * Insert users
         *
         * @abstract
         * @method PDOStatement|false create()
         * @static
         * @param Users $users
         * @return PDOStatement|false
         */
        public static function create(Users $users): PDOStatement|false;
        /**
         * Delete users
         *
         * @abstract
         * @method PDOStatement|false delete()
         * @static
         * @param Users $users
         * @return PDOStatement|false
         */
        public static function delete(Users $users): PDOStatement|false;
        /**
         * Read users data
         *
         * @abstract
         * @method PDOStatement|false read()
         * @static
         * @param Users $users
         * @return array|false
         */
        public static function read(Users $users): array|false;
        /**
         * Update users data
         *
         * @abstract
         * @method PDOStatement|false update()
         * @static
         * @param Users $users
         * @return PDOStatement|false
         */
        public static function update(Users $users): PDOStatement|false;
    }