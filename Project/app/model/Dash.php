<?php

class Dash{

    protected $pdo;

    public function __construct(){
        $this->pdo = new Database;
    }

    //------------------------------------------------------
    public function read(){

        $query = "SELECT products.*, category.name FROM `products` INNER JOIN category ON products.category_id = category.id";
        $this->pdo->prepare($query);
        $products = $this->pdo->resultSet();
        return $products;
    }

    //------------------------------------------------------
    public function lonely($id){

        $query = "SELECT products.*, category.name FROM `products` INNER JOIN category ON products.category_id = category.id WHERE products.id = '$id'";
        $this->pdo->prepare($query);
        $product = $this->pdo->single();
        return $product;
    }

    //------------------------------------------------------
     public function addProduct($data){
        $this->pdo->prepare("INSERT INTO `products` (`image`, `label`, `codeBarre`, `buyP`, `sellP`, `finalP`, `category_id`, `description`, `color`) 
                                VALUES (:img, :label, :cb, :buyp, :sellp, :finalp, (SELECT id FROM `category` WHERE name = :catid), :descr, :color)");
        $this->pdo->bind(':img', $data['img']);
        $this->pdo->bind(':label', $data['label']);
        $this->pdo->bind(':cb', $data['code']);
        $this->pdo->bind(':buyp', $data['buy']);
        $this->pdo->bind(':sellp', $data['sell']);
        $this->pdo->bind(':finalp', $data['final']);
        $this->pdo->bind(':catid', $data['cat']);
        $this->pdo->bind(':descr', $data['desc']);
        $this->pdo->bind(':color', $data['color']);
        

        if ($this->pdo->execute()) {
            return true;
        } else {
            return false;
        }


    }

    //------------------------------------------------------

    public function updateProduct($id,$label,$code,$buy,$sell,$final,$cat,$desc,$img){

        $query =    "UPDATE `products`
                    SET `image` = '$img', `label` = '$label', `codeBarre` = '$code', `buyP` = '$buy', `sellP` = '$sell', `finalP` = '$final', `category_id` = (SELECT id FROM category WHERE name = '$cat'), `description` = '$desc'
                    WHERE `id` = '$id'";

        $this->pdo->query($query);
    }

    //------------------------------------------------------
    public function deleteProduct($id){ 

        $query = "DELETE FROM `products` WHERE id = '$id' ";
        $this->pdo->query($query);
    }

    //------------------------------------------------------
    public function category(){

        $query = "SELECT * FROM `category`";
        $this->pdo->prepare($query);
        $categories = $this->pdo->resultSet();
        return $categories;
    }

    //------------------------------------------------------
    public function getcategory($id){

        $query = "SELECT category.name FROM `category` WHERE id = '$id'";
        $this->pdo->prepare($query);
        $categories = $this->pdo->resultSet();
        return $categories;
    }
    //------------------------------------------------------
    public function addCategory($data){

        $query = "INSERT INTO `category`(`name`, `image`, `description`) VALUES () ";
    }

}

?>