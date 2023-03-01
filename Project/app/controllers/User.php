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
        if(isset($_POST['label']) && isset($_POST['quantity']) && isset($_POST['user']) && isset($_POST['total'])){
            $label = $_POST['label'];
            $qtt = $_POST['quantity'];
            $user = $_POST['user'];
            $total = $_POST['total'];

            $this->users->addtocart($label,$user,$qtt,$total);
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
}




?>