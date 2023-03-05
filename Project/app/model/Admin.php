<?php

    class Admin{

        protected $pdo;

        public function __construct()
        {
            $this->pdo = new Database;
        }

        public function login($email,$password){

            $query = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password' ";
            $this->pdo->prepare($query);
            $user = $this->pdo->resultSet();

            return $user;
            }
        }  
?>