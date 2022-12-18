<?php
    require_once('../database/database.model.php');


    class show extends database{

        public function AllClients(){

            $db = new database();
            $pdo = $db->connection();  

            $query = "SELECT * FROM `clients`";
            $exe = $pdo->prepare($query);
            $exe->execute();

            $allClients = $exe->fetchAll(PDO::FETCH_ASSOC);
            
            return $allClients;
        }
    }
?>