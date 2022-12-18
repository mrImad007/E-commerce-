<?php
    require_once('../database/database.model.php');

    class addCategory extends database{

        public function addCtgry(){

            $data = new database();
            $pdo = $data->connection();

            $query = "INSERT INTO `category` VALUES ('','','','','','','') WHERE `id`=''";
            $exe = $pdo->prepare($query);
            $exe->execute();
        }
    }
?>