<?php
    class database{
        private $host = "mysql:host=localhost;port=3306;dbname=electroMaroc";
        private $root = 'imad';
        private $pwd = 'halimabouroud4316';

        protected function connection(){

            $pdo = new PDO($this->host,$this->root,$this->pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }
    }
?>