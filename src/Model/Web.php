<?php
    /**
     * User: Lucas Torres
     * Date: 28/06/2022
     * Time: 18:12
     */
    namespace Src\Model;

    use PDO;
    use PDOStatement;
    use Src\Database\Connection\Connection;
    use Src\Database\Entity\Users;
    use Src\Services\Repository\WebRepository;
    use Src\Services\Validation\UserAuth;

    include 'C:/xampp/htdocs/Folder/vendor/autoload.php';
    /**
     * Website feature
     * 
     * @final
     * @static
     * @author Lucas Torres <l.torres3001.lt@gmail.com>
     */
    final class Web extends Connection implements WebRepository
    {
        /**
         * Query
         *
         * @static
         * @var string
         */
        private static string $query;
        /**
         * Statement
         *
         * @static
         * @var PDOStatement|false
         */
        private static PDOStatement|false $statement;
        /**
         * Dashboard
         *
         * @final
         * @method array|false dashboard()
         * @static
         * @return array|false
         */
        final public static function dashboard(): array|false
        {
            self::$query = "SELECT `id_user`,`firstName`,`lastName`,`email`,`image` FROM users";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->execute();
            $users = self::$statement->fetchAll(
                PDO::FETCH_ASSOC
            );
            return $users;
        }
        /**
         * All data
         *
         * @final
         * @method array|false all()
         * @static
         * @return array|false
         */
        final public static function all(): array|false
        {
            self::$query = "SELECT
            `id_user`,`firstName`,`lastName`,`gender`,`ethnicity`,`birth`,`image`
            FROM users
            ORDER BY `firstName`";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->execute();
            $users = self::$statement->fetchAll(
                PDO::FETCH_ASSOC
            );
            return $users;
        }
        /**
         * Login method
         *
         * @method PDOStatement|false login()
         * @static
         * @param Users $users
         * @return PDOStatement|false
         */
        public static function login(Users $users): PDOStatement|false
        {
            UserAuth::emailValidation($users::getEmail());
            UserAuth::passwordValidation($users::getPassword());
            $passwordHash = sha1(
                $users::getPassword()
            );
            self::$query = "SELECT `email`,`password` FROM users WHERE `email` = :em AND `password` = :ps";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->bindValue(":em", $users::getEmail(), PDO::PARAM_STR);
            self::$statement->bindValue(":ps", $passwordHash, PDO::PARAM_STR);
            self::$statement->execute();
            
            return self::$statement;
        }
        /**
         * Search users
         *
         * @method array|false where()
         * @static
         * @param string $search
         * @return array|false
         */
        public static function where(string $search): array|false
        {
            self::$query = "SELECT
            `id_user`,`firstName`,`lastName`,`gender`,`ethnicity`,`birth`,`image`
            FROM users
            WHERE `firstName` LIKE :search
            OR
            `lastName`LIKE :search
            ORDER BY `firstName`";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->bindValue(":search", $search, PDO::PARAM_STR);
            self::$statement->execute();
            $users = self::$statement->fetchAll(
                PDO::FETCH_ASSOC
            );
            return $users;
        }
        /**
         * find user ID
         *
         * @method PDOStatement|false find()
         * @static
         * @param Users $users
         * @return array|false
         */
        public static function find(Users $users): array|false
        {
            self::$query = "SELECT
            `firstName`,`lastName`,`email`,`gender`,`ethnicity`,`birth`,`image`,`message`
            FROM users
            WHERE `id_user` = :id";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->bindValue(":id", $users::getIdUser(), PDO::PARAM_INT);
            self::$statement->execute();
            $user = self::$statement->fetchAll(
                PDO::FETCH_ASSOC
            );
            return $user;
        }
    }