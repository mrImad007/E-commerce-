<?php
class Users{
    protected $pdo;
    
    //--------------------------------------------
    public function __construct(){
        $this->pdo = new Database;
    }

    //--------------------------------------------LogIn & Register
    public function register($name,$image,$email,$pwd,$tel,$adrs){

        $query = "INSERT INTO `users` (`name`, `image`, `email`, `password`, `phone`, `adress`) VALUES ('$name', '$image', '$email', '$pwd', '$tel', '$adrs')";
        $this->pdo->query($query);
    }

    //--------------------------------------------
    public function log($email,$pwd){
        
        $query = "SELECT * FROM `users` WHERE `email`= '$email' AND `password` = '$pwd' ";
        $this->pdo->prepare($query);
        $user = $this->pdo->resultSet();

        return $user;
    }

    //--------------------------------------------Cart management
    public function seeCart(){
        $query = "SELECT `cart`.* , `products`.`label`,`products`.`image`,`products`.`sellP`, `users`.`name` FROM `cart` INNER JOIN `products` ON `cart`.`id_product` = `products`.`id` INNER JOIN `users` ON  `cart`.`id_user` = `users`.`id`";
        $this->pdo->prepare($query);
        $myprods = $this->pdo->resultSet();

        return $myprods;

    }
    //--------------------------------------------
    public function addtocart($data){

        $query = "INSERT INTO `cart` (`id_user`, `id_product`, `quantity`, `total_price`) VALUES ((SELECT id FROM users WHERE `name` = :user), (SELECT id FROM products WHERE label = :label), :qtt, :ttl)";
        $this->pdo->prepare($query);

        $this->pdo->bind(':user', $data['user']);
        $this->pdo->bind(':ttl',$data['total']);
        $this->pdo->bind(':label',$data['label']);
        $this->pdo->bind(':qtt', $data['qtt']);

        $this->pdo->execute();

    }

    //--------------------------------------------
    public function lonely($id){

        $query = "SELECT products.*, category.name FROM `products` INNER JOIN category ON products.category_id = category.id WHERE products.id = '$id'";
        $this->pdo->prepare($query);
        $product = $this->pdo->single();
        return $product;
    }
    //--------------------------------------------
    public function deleteFromCart($id){
        $query = "DELETE FROM `cart` WHERE  `id_product`= :id";
        $this->pdo->prepare($query);
        $this->pdo->bind(':id',$id);
        $this->pdo->execute();

    }
    //--------------------------------------------
    public function updateCart($data){
        $query = "  UPDATE `cart`
                    SET   `quantity` = :qtt
                    WHERE `id_product` = :id";
                
        $this->pdo->prepare($query);
        $this->pdo->bind(':id', $data['id']);
        $this->pdo->bind(':qtt', $data['qtt']);
        $this->pdo->bind(':ttl', $data['ttl']);
        $this->pdo->execute();
    }
    //-------------------------------------------
    public function createCommande($data) {
        $user = 1;
        $ttl = '1232';
        $this->pdo->beginTransaction();
        $this->pdo->prepare("INSERT INTO `commandes`(`creation_date`, `user_id`, `total_price`) VALUES (:datee, :user, :ttl)");
        $this->pdo->bind(':user', $user);
        $this->pdo->bind(':datee', $data['creation_date']);
        $this->pdo->bind(':ttl', $ttl);
        $this->pdo->execute();
        return $this->pdo->lastInserId();
    }

    public function addProductCommande($data) {
        $this->pdo->prepare("INSERT INTO `product_command`(`id_command`, `id_product`, `quantity`) VALUES (:id_c, :id_p, :qtt)");
        $this->pdo->bind(':id_p', $data['id_product']);
        $this->pdo->bind(':id_c', $data['id_commande']);
        $this->pdo->bind(':qtt', $data['quantite']);
        if ($this->pdo->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function finishCommande() {
        return $this->pdo->commit();
    }

    // public function totalPrice() {
    //     $this->pdo->query("SELECT SUM(p.selling_price * pc.quantite) as price FROM product_commande pc JOIN product p ON p.id_p = pc.id_product JOIN commande c ON c.id = pc.id_commande GROUP BY id_commande");
    //     $row = $this->pdo->single();
    //     return $row;
    // }

    public function clearPanier() {
        $this->pdo->prepare("DELETE FROM cart");
        $this->pdo->execute();
    }
}


?>