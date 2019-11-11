<?php

    class User{
        public $username;
        public $password;

        private static $passwordLength = 5;

        public static function getPasswordLength(){
            return self::$passwordLength;
        }

    }


    echo User::getPasswordLength();


?>