<?php
    include_once('../model/database/database.model.php');

    class login extends database{

        public function check($email,$password){

            $log = new database();
            $pdo = $log->connection();

            $query = "SELECT * FROM `admin` WHERE email = '$email' AND `password` = '$password' ";
            $stet = $pdo->prepare($query);
            $stet->execute();
            $user = $stet->fetchAll(PDO::FETCH_ASSOC);

            return $user;
            }
        }  
?>