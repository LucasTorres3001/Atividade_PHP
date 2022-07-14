<?php
    /**
     * User: Lucas Torres
     * Date: 28/06/2022
     * Time: 14:29
     */
    namespace Src\Services\Validation;

    use Exception;
    use Src\Services\Repository\UserAuthRepository;

    include 'C:/xampp/htdocs/Folder/vendor/autoload.php';
    /**
     * User auth
     * 
     * @final
     * @static
     * @author Lucas Torres <l.torres3001.lt@gmail.com>
     */
    final class UserAuth implements UserAuthRepository
    {
        /**
         * CPF validation method
         *
         * @final
         * @method void cpfValidation()
         * @static
         * @param string $cpf
         * @return void
         */
        final public static function cpfValidation(string $cpf): void
        {
            if (!is_numeric($cpf))
            {
                throw new Exception('CPF cannot contain letters or any other types of characters.');
            } elseif (strlen($cpf) < 11)
            {
                throw new Exception('CPF cannot be formed by less than 11 digits.');
            } else
            {
                preg_replace(
                    '/[^0-9]/', '', $cpf
                );
                $soma1 = $soma2 = 0;
                for ($i=0, $x=10; $i <= 8; $i++, $x--)
                {
                    $soma1 += ($cpf[$i] * $x);
                }
                for ($i=0, $x=11; $i <= 9; $i++, $x--)
                {
                    $soma2 += ($cpf[$i] * $x);
                    if (str_repeat($i, 11) === $cpf)
                    {
                        throw new Exception('CPF cannot be formed by a single number repeated several times.');
                    }
                }
                $resto1 = (
                    ($soma1%11) < 2) ?
                    0 : (11 - ($soma1%11)
                );
                $resto2 = (
                    ($soma2%11) < 2) ?
                    0 : (11 - ($soma2%11)
                );
                if (($resto1 != $cpf[9]) or ($resto2 != $cpf[10]))
                {
                    throw new Exception('Invalid CPF');
                }
            }
        }
        /**
         * Email validation method
         *
         * @final
         * @method void emailValidation()
         * @static
         * @param string $email
         * @return void
         */
        final public static function emailValidation(string $email): void
        {
            if (empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                throw new Exception('Invalid e-mail');
            }
        }
        /**
         * Username validation method
         *
         * @final
         * @method void firstNameValidation()
         * @static
         * @param string $firstName
         * @return void
         */
        final public static function firstNameValidation(string $firstName): void
        {
            if ((strlen(trim($firstName)) < 3) or (str_word_count($firstName) > 2))
            {
                throw new Exception('Invalid username');
            }
        }
        /**
         * Username validation method
         *
         * @final
         * @method void lastNameValidation()
         * @static
         * @param string $lastName
         * @return void
         */
        final public static function lastNameValidation(string $lastName): void
        {
            if ((strlen(trim($lastName)) < 2) or (str_word_count($lastName) > 3))
            {
                throw new Exception('Invalid username');
            }
        }
        /**
         * Password validation method
         *
         * @final
         * @method void passwordValidation()
         * @static
         * @param string $pass
         * @return void
         */
        final public static function passwordValidation(string $pass): void
        {
            if (strlen(trim($pass)) < 8)
            {
                throw new Exception('Invalid password');
            }
        }
    }