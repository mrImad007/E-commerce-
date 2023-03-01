<?php
    require_once('../database/database.model.php');

    class addProduct extends database{

        public function addproduct($id,$label,$code,$buy,$sell,$final,$desc,$cat,$img){

            $data = new database();
            $pdo = $data->connection();

            $query = "INSERT INTO `products` (`id`,`codeBarre`,`label`,`buyPrice`,`sellPrice`,`description`,`category`,`finalPrice`,`image`) VALUES (NULL,'$code','$label','$buy','$sell','$desc','$cat','$final','$img') WHERE `id`='$id' ";
            $exe = $pdo->prepare($query);
            $exe->execute();
        }
    }
?>