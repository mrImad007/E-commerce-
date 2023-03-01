<?php
class Users{
    protected $pdo;
    
    //--------------------------------------------
    public function __construct(){
        $this->pdo = new Database;
    }

    //--------------------------------------------
    public function register($name,$image,$email,$pwd,$tel,$adrs){
        $query = "INSERT INTO `users` (`name`, `image`, `email`, `password`, `phone`, `adress`) VALUES ('$name', '$image', '$email', '$pwd', '$tel', '$adrs')";
        $this->pdo->query($query);
    }

    //--------------------------------------------
    public function Log($email,$pwd){
        
        $query = "SELECT * FROM `users` WHERE `email`= '$email' AND `password` = '$pwd' ";
        $this->pdo->prepare($query);
        $user = $this->pdo->resultSet();

        return $user;
    }

    //--------------------------------------------
    public function addtocart($label,$user,$qtt,$total){
        $query = "INSERT INTO cart (`id_user`,`id_product`,`quantity`, `total_price`) VALUES ((SELECT products.id FROM `products` WHERE `label` = '$label'),(SELECT users.id FROM `users` WHERE `name` = '$user'), '$qtt','$total')";
        $this->pdo->query($query);
    }

    //--------------------------------------------
    public function lonely($id){

        $query = "SELECT products.*, category.name FROM `products` INNER JOIN category ON products.category_id = category.id WHERE products.id = '$id'";
        $this->pdo->prepare($query);
        $product = $this->pdo->single();
        return $product;
    }
    
}


?>