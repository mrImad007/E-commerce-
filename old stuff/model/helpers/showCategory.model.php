<?php
    include_once('../model/database/database.model.php');

    class showCatg extends database{

        public function allCategories(){

            $db = new database();
            $pdo = $db->connection();  

            $query = "SELECT * FROM `category`";
            $exe = $pdo->prepare($query);
            $exe->execute();

            $allCategories = $exe->fetchAll(PDO::FETCH_ASSOC);
            
            return $allCategories;
        }
    }
?>