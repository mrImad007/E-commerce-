<?php
    require_once('../database/database.model.php');

    class updateProduct extends database{

        public function updateprdct(){

            $data = new database();
            $pdo = $data->connection();

            $query = "UPDATE `products` 
            SET (`codeBarre`='',`label`='',`buyPrice`='',`sellPrice`='',`finalPrice`='',`description`='',`category`='') 
            WHERE `id`=''";

            $exe = $pdo->prepare($query);
            $exe->execute();
        }
    }
?>