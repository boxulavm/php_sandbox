<?php

    class Person {
        private $name;
        private $email;
        
        public static $ageLimit = 18;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo(__CLASS__." Constructor : $name Created!<br>");
        }

        public function __destruct(){

            echo(__CLASS__." Destructor :  Destoroyed!<br>");
        }


        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email.'<br>';
        }

    }

    // $person1 = new Person('John Doe', 'jdoe@ss.com');

    // $person1->name = 'John Doe';

    // echo($person1->name);


    // $person1->setName('John Doe');

    // echo($person1->getName());


    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }
        
        
        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }

    }

    $cutomer1 = new Customer('John Doe', 'jdoe@gm.com',233);

    echo $cutomer1->getBalance();