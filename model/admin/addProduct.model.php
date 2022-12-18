<?php
    require_once('../database/database.model.php');

    class addProduct extends database{

        public function addprdct(){

            $data = new database();
            $pdo = $data->connection();

            $query = "INSERT INTO `products` VALUES ('','','','','','','') WHERE `id`=''";
            $exe = $pdo->prepare($query);
            $exe->execute();
        }
    }
?>