<?php
    require_once('../database/database.model.php');

    class updateCategory extends database{

        public function updateCtgry(){

            $data = new database();
            $pdo = $data->connection();

            $query = "UPDATE `category` 
            SET (`codeBarre`='',`label`='',`buyPrice`='',`sellPrice`='',`finalPrice`='',`description`='',`category`='') 
            WHERE `id`=''";

            $exe = $pdo->prepare($query);
            $exe->execute();
        }
    }
?>