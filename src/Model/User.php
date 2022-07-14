<?php
    /**
     * User: Lucas Torres
     * Date: 28/06/2022
     * Time: 15:51
     */
    namespace Src\Model;

    use PDO;
    use PDOStatement;
    use Src\Database\Connection\Connection;
    use Src\Database\Entity\Users;
    use Src\Services\Repository\UserRepository;
    use Src\Services\Validation\UserAuth;

    include 'C:/xampp/htdocs/Folder/vendor/autoload.php';
    /**
     * User class
     * 
     * @final
     * @static
     * @author Lucas Torres <l.torres3001.lt@gmail.com>
     */
    final class User extends Connection implements UserRepository
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
         * Insert method
         *
         * @method PDOStatement|false create()
         * @static
         * @param Users $users
         * @return PDOStatement|false
         */
        public static function create(Users $users): PDOStatement|false
        {
            UserAuth::firstNameValidation($users::getFirstName());
            UserAuth::lastNameValidation($users::getLastName());
            UserAuth::cpfValidation($users::getCpf());
            UserAuth::emailValidation($users::getEmail());
            UserAuth::passwordValidation($users::getPassword());
            $passwordHash = sha1(
                $users::getPassword()
            );
            self::$query = "INSERT INTO
            users VALUES
            (
                DEFAULT, :fn, :ln, :cpf, :em, :ps,
                :g, :eth, :b, :img, :msg, NOW(), NOW()
            )";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->bindValue(":fn", $users::getFirstName(), PDO::PARAM_STR);
            self::$statement->bindValue(":ln", $users::getLastName(), PDO::PARAM_STR);
            self::$statement->bindValue(":cpf", $users::getCpf(), PDO::PARAM_STR);
            self::$statement->bindValue(":em", $users::getEmail(), PDO::PARAM_STR);
            self::$statement->bindValue(":ps", $passwordHash, PDO::PARAM_STR);
            self::$statement->bindValue(":g", $users::getGender(), PDO::PARAM_STR);
            self::$statement->bindValue(":eth", $users::getEthnicity(), PDO::PARAM_STR);
            self::$statement->bindValue(":b", $users::getBirth(), PDO::PARAM_STR);
            self::$statement->bindValue(":img", $users::getImage(), PDO::PARAM_STR);
            self::$statement->bindValue(":msg", $users::getMsg(), PDO::PARAM_STR);
            self::$statement->execute();

            return self::$statement;
        }
        /**
         * Delete method
         *
         * @method PDOStatement|false delete()
         * @static
         * @param Users $users
         * @return PDOStatement|false
         */
        public static function delete(Users $users): PDOStatement|false
        {
            self::$query = "DELETE FROM users WHERE `id_user` = :id";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->bindValue(":id", $users::getIdUser(), PDO::PARAM_INT);
            self::$statement->execute();

            return self::$statement;
        }
        /**
         * Read users data
         *
         * @method array|false read()
         * @static
         * @param Users $users
         * @return array|false
         */
        public static function read(Users $users): array|false
        {
            self::$query = "SELECT
            `firstName`,`lastName`,`email`,`password`,`message`
            FROM users
            WHERE `id_user` = :id";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->bindValue(":id", $users::getIdUser(), PDO::PARAM_INT);
            self::$statement->execute();
            $datas = self::$statement->fetchAll(
                PDO::FETCH_ASSOC
            );
            return $datas;
        }
        /**
         * Update users data
         *
         * @method PDOStatement|false update()
         * @static
         * @param Users $users
         * @return PDOStatement|false
         */
        public static function update(Users $users): PDOStatement|false
        {
            UserAuth::firstNameValidation($users::getFirstName());
            UserAuth::lastNameValidation($users::getLastName());
            UserAuth::emailValidation($users::getEmail());
            UserAuth::passwordValidation($users::getPassword());
            $passwordHash = sha1(
                $users::getPassword()
            );
            self::$query = "UPDATE users SET
            `firstName` = :fn,
            `lastName` = :ln,
            `email` = :em,
            `password` = :ps,
            `image` = :img,
            `message` = :msg,
            `updated_at` = NOW()
            WHERE `id_user` = :id";
            self::$statement = self::getConnection()->prepare(self::$query);
            self::$statement->bindValue(":fn", $users::getFirstName(), PDO::PARAM_STR);
            self::$statement->bindValue(":ln", $users::getLastName(), PDO::PARAM_STR);
            self::$statement->bindValue(":em", $users::getEmail(), PDO::PARAM_STR);
            self::$statement->bindValue(":ps", $passwordHash, PDO::PARAM_STR);
            self::$statement->bindValue(":img", $users::getImage(), PDO::PARAM_STR);
            self::$statement->bindValue(":msg", $users::getMsg(), PDO::PARAM_STR);
            self::$statement->bindValue(":id", $users::getIdUser(), PDO::PARAM_INT);
            self::$statement->execute();

            return self::$statement;
        }
    }