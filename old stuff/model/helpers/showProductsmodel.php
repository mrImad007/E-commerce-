<?php
    require_once('../database/database.model.php');


    class show extends database{

        public function AllProducts(){

            $db = new database();
            $pdo = $db->connection();  

            $query = "SELECT * FROM `products`";
            $exe = $pdo->prepare($query);
            $exe->execute();

            $allProducts = $exe->fetchAll(PDO::FETCH_ASSOC);
            
            return $allProducts;
        }
    }
?>