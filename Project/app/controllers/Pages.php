<?php
class Pages extends Controller{

    //------------------------------------------------------
    private $CrudModel;
    //------------------------------------------------------
    public function __construct()
    {
        $this->CrudModel = $this->model('Dash');
    }

    //------------------------------------------------------
    public function index(){
       $this->view('Templates/index');
    }

    //------------------------------------------------------
    public function products(){
        $products = $this->CrudModel->read();
        $data= [
            'products' => $products,
        ];
        $this->view('Templates/Products',$data);
    }

    //------------------------------------------------------
    public function about(){
        $this->view('Templates/About');
    }

    //------------------------------------------------------
    public function signin(){
        $this->view('Templates/Signin');
    }

    //------------------------------------------------------
    public function blog(){
        $this->view('Templates/Blog');
    }

    //------------------------------------------------------
    public function contact(){
        $this->view('Templates/Contact');
    }

    //------------------------------------------------------
    public function cart(){
        $this->view('Templates/Shoping-cart');
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

    
}
?>