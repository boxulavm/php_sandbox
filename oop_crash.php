<?php

    class Customer{
        private $id = 1;
        private $name;
        protected $email;
        private $balance;

        public function __construct($id, $name, $email, $balance){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->balance = $balance;
        }

        // public function getCustomer($id){
        //     $this->id = $id;

        //     return '-- John Doe --';

        // }

        // public function __destruct(){
        //     echo 'Destructor RAN..';
        // }

        public function getEmail(){
            return $this->email;
        }

    }


    // $customer = new Customer(1, 'Jon Snow', 'jsnow@wall.com', 175);

    // echo $customer->getEmail();

    class Subscriber extends Customer{
        public $plan;

        public function __construct($id, $name, $email, $balance, $plan){
            parent::__construct($id, $name, $email, $balance);
            $this->plan = $plan;
        }

        // public function getEmail(){
        //     return $this->email;
        // }

    }


    $subscriber1 = new Subscriber(1, 'Jon Snow', 'jsnow@wall.com', 175, 'PRO');

    echo $subscriber1->getEmail();


?>