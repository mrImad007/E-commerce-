<?php

class User extends Controller{
    protected $pdo;
    protected $users;

    public function __construct(){
        $this->pdo = new Database;
        $this->users = $this->model('Users');
    }
    //--------------------------------------------
    public function register(){
        if(isset($_POST['name']) && isset($_POST['image']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['tel']) && isset($_POST['adress'])){
            $name = $_POST['name'];
            $image = $_POST['image'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $tel = $_POST['tel'];
            $adress = $_POST['adress'];

            $this->users->register($name,$image,$email,$pwd,$tel,$adress);
            
            $this->view('Templates/contact');
        };
    }

    //--------------------------------------------
    public function logIn(){
        if(isset($_POST['email']) && isset($_POST['pwd'])){
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];

            $return = $this->users->log($email,$pwd);

            if($return){
                echo "loged in";
                // header('Location:'.URLROOT.'ElectroSite/public/Admin/show');            
            }else{
                echo "user not found";
            }

        };
    }

    //--------------------------------------------
    public function addCart(){
        if(isset($_POST['label']) && isset($_POST['qtt'])){
            
            $data = [
                'user' => 'imad',
                'label' => $_POST['label'],
                'qtt' => $_POST['qtt'],
                'total' => 666
            ];

            // print_r($data);die();
            $this->users->addtocart($data);

            header('Location:'.URLROOT.'ElectroSite/public/Pages/cart');
        }
    }

    //--------------------------------------------
    public function showOne(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];

            $product = $this->users->lonely($id);

            $data= [
                'id' => $product->id,
                'image' => $product->image,
                'label' => $product->label,
                'codeBarre' => $product->codeBarre,
                'buyP' => $product->buyP,
                'sellP' => $product->sellP,
                'finalP' => $product->finalP,
                'category_name' => $product->name,
                'description' => $product->description
            ];

            $this->view('Templates/Product-detail',$data);
        }
    }

    //--------------------------------------------
    public function deleteCart(){
        
        if(isset($_POST['This_id'])){
            $id = $_POST['This_id'];
            
            $this->users->deleteFromCart($id);

            header('Location:'.URLROOT.'ElectroSite/public/Pages/cart');

        }
    }
    //--------------------------------------------
    public function updateCart(){
        if(isset($_POST['productId']) && isset($_POST['qtt'])){
            $data = [
                'id' => $_POST['productId'],
                'qtt' => $_POST['qtt']
            ];

            $this->users->updateCart($data);

            die('done');
            header('Location:'.URLROOT.'ElectroSite/public/Pages/cart');



        }
    }
    //--------------------------------------------
    public function sendCommande() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $products = $_POST['products'];
            $quantity = $_POST['quantity'];
            // $total = $this->users->totalPrice();
            $data = [
                'id_client' => $_SESSION['id'],
                'creation_date' => date('d-m-y'),
            ];

            $idCommande = $this->users->createCommande($data);
            if ($idCommande) {
                for ($i = 0; $i < count($products); $i++) {
                    $data = [
                        'id_product' => $products[$i],
                        'id_commande' => $idCommande,
                        'quantite' => $quantity[$i],
                    ];
                    $this->users->addProductCommande($data);
                }
                if ($this->users->finishCommande()) {
                    $this->users->clearPanier();
                    // redirect('commandes/commandeDetails');
                    die("all set");
                } else {
                    die('SOMETHING WRONG ???');
                }
            }
        }
    }
}




?>