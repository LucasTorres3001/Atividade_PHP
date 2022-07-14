<?php
    /**
     * User: Lucas Torres
     * Date: 28/06/2022
     * Time: 15:11
     */
    namespace Src\Database\Entity;
    /**
     * Users entity
     * 
     * @final
     * @static
     * @author Lucas Torres <l.torres3001.lt@gmail.com>
     */
    final class Users
    {
        /**
         * Primary key
         *
         * @static
         * @var integer|null
         */
        private static ?int $id_user;
        /**
         * Table columns
         *
         * @static
         * @var string|null
         */
        private static ?string $firstName, $lastName, $cpf, $email, $password, $gender, $ethnicity, $birth, $image, $message;
        /**
         * Class constructor
         *
         * @param integer|null $id_user
         * @param string|null $firstName
         * @param string|null $lastName
         * @param string|null $cpf
         * @param string|null $email
         * @param string|null $password
         * @param string|null $gender
         * @param string|null $ethnicity
         * @param string|null $birth
         * @param string|null $image
         * @param string|null $message
         */
        public function __construct(?int $id_user, ?string $firstName, ?string $lastName, ?string $cpf, ?string $email, ?string $password, ?string $gender, ?string $ethnicity, ?string $birth, ?string $image, ?string $message)
        {
            self::$id_user = $id_user;
            self::$firstName = $firstName;
            self::$lastName = $lastName;
            self::$cpf = $cpf;
            self::$email = $email;
            self::$password = $password;
            self::$gender = $gender;
            self::$ethnicity = $ethnicity;
            self::$birth = $birth;
            self::$image = $image;
            self::$message = $message;
        }
        /**
         * Set ID user
         *
         * @static
         * @param integer|null $id_user
         * @return void
         */
        public static function setIdUser(?int $id_user): void
        {
            self::$id_user = $id_user;
        }
        /**
         * Get ID user
         *
         * @final
         * @static
         * @return integer
         */
        final public static function getIdUser(): int
        {
            return self::$id_user;
        }
        /**
         * Set first name
         *
         * @static
         * @param string|null $firstName
         * @return void
         */
        public static function setFirstName(?string $firstName): void
        {
            self::$firstName = $firstName;
        }
        /**
         * Get first name
         *
         * @final
         * @static
         * @return string
         */
        final public static function getFirstName(): string
        {
            return self::$firstName;
        }
        /**
         * Set last name
         *
         * @static
         * @param integer|null $lastName
         * @return void
         */
        public static function setLastName(?int $lastName): void
        {
            self::$lastName = $lastName;
        }
        /**
         * Get last name
         *
         * @final
         * @static
         * @return string
         */
        final public static function getLastName(): string
        {
            return self::$lastName;
        }
        /**
         * Set users CPF
         *
         * @static
         * @param string|null $cpf
         * @return void
         */
        public static function setCpf(?string $cpf): void
        {
            self::$cpf = $cpf;
        }
        /**
         * Get users CPF
         *
         * @final
         * @static
         * @return string
         */
        final public static function getCpf(): string
        {
            return self::$cpf;
        }
        /**
         * Set users email
         *
         * @static
         * @param string|null $email
         * @return void
         */
        public static function setEmail(?string $email): void
        {
            self::$email = $email;
        }
        /**
         * Get users email
         *
         * @final
         * @static
         * @return string
         */
        final public static function getEmail(): string
        {
            return self::$email;
        }
        /**
         * Set users password
         *
         * @static
         * @param string|null $password
         * @return void
         */
        public static function setPassword(?string $password): void
        {
            self::$password = $password;
        }
        /**
         * Get users password
         *
         * @final
         * @static
         * @return string
         */
        final public static function getPassword(): string
        {
            return self::$password;
        }
        /**
         * Set users gender
         *
         * @method void setGender()
         * @static
         * @param string|null $gender
         * @return void
         */
        public static function setGender(?string $gender): void
        {
            self::$gender = $gender;
        }
        /**
         * Get users gender
         *
         * @final
         * @method string getGender()
         * @static
         * @return string
         */
        final public static function getGender(): string
        {
            return self::$gender;
        }
        /**
         * Set users ethnicity
         *
         * @method void setEthnicity()
         * @static
         * @param string|null $ethnicity
         * @return void
         */
        public static function setEthnicity(?string $ethnicity): void
        {
            self::$ethnicity = $ethnicity;
        }
        /**
         * Get users ethnicity
         *
         * @final
         * @method string getEthnicity()
         * @static
         * @return string
         */
        final public static function getEthnicity(): string
        {
            return self::$ethnicity;
        }
        /**
         * Set users birthday
         *
         * @method void setBirth()
         * @static
         * @param string|null $birth
         * @return void
         */
        public static function setBirth(?string $birth): void
        {
            self::$birth = $birth;
        }
        /**
         * Get users birthday
         *
         * @final
         * @method string getBirth()
         * @static
         * @return string
         */
        final public static function getBirth(): string
        {
            return self::$birth;
        }
        /**
         * Set users image
         *
         * @method void setImage()
         * @static
         * @param string|null $image
         * @return void
         */
        public static function setImage(?string $image): void
        {
            self::$image = $image;
        }
        /**
         * Get users image
         *
         * @final
         * @method string getImage()
         * @static
         * @return string
         */
        final public static function getImage(): string
        {
            return self::$image;
        }
        /**
         * Set users message
         *
         * @method void setMsg()
         * @static
         * @param string|null $message
         * @return void
         */
        public static function setMsg(?string $message): void
        {
            self::$message = $message;
        }
        /**
         * Get users message
         *
         * @final
         * @method string getMsg()
         * @static
         * @return string
         */
        final public static function getMsg(): string
        {
            return self::$message;
        }
    }