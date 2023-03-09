<?php
class Pages extends Controller{

    //------------------------------------------------------
    private $CrudModel;
    private $UsersModel;
    //------------------------------------------------------
    public function __construct()
    {
        $this->CrudModel = $this->model('Dash');
        $this->UsersModel = $this->model('Users');
    }

    //------------------------------------------------------
    public function index(){
        $prod = $this->UsersModel->seeCart();
        $data = [
            'products' => $prod
        ];
       $this->view('Templates/index',$data);
    }

    //------------------------------------------------------
    public function products(){
        $products = $this->CrudModel->read();
        $prod = $this->UsersModel->seeCart();
        $data= [
            'products' => $products,
        ];
        
        $data2 = [
            'products' => $prod
        ];
        $this->view('Templates/Products',$data,$data2);
    }

    //------------------------------------------------------
    public function about(){
        $prod = $this->UsersModel->seeCart();
        $data = [
            'products' => $prod
        ];
        $this->view('Templates/About',$data);
    }

    //------------------------------------------------------
    public function signin(){
        $this->view('Templates/Signin');
    }

    //------------------------------------------------------
    public function blog(){

        $prod = $this->UsersModel->seeCart();
        $data = [
            'products' => $prod
        ];
        $this->view('Templates/Blog',$data);
    }

    //------------------------------------------------------
    public function contact(){
        $prod = $this->UsersModel->seeCart();
        $data = [
            'products' => $prod
        ];
        $this->view('Templates/Contact',$data);
    }

    //------------------------------------------------------
    public function cart(){
        $prod = $this->UsersModel->seeCart();
        $data = [
            'products' => $prod
        ];
        $this->view('Templates/Shoping-cart',$data);
    }

    //------------------------------------------------------
    public function updateforms(){
        $this->view('Templates/Updateforms');
    }

    //------------------------------------------------------
    public function register(){
        $this->view('Templates/Register');
    }

    //------------------------------------------------------
    public function entry(){
        $this->view('Templates/UserSign');
    }
    //------------------------------------------------------
    public function registerForms(){
        $this->view('Templates/Register');
    }

    //------------------------------------------------------
    public function error(){
        $this->view('Templates/error');
    }
}
?>