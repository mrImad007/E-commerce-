<?php
    
    class Log extends Controller{
        private $LoginModel;

        public function __construct()
        {
            $this->LoginModel = $this->model('Admin');
        }

        public function doLogin(){
            
            if(isset($_POST['email']) && isset($_POST['pwd'])){
                session_start();
                $email = $_POST['email'];
                $password = $_POST['pwd'];
               
                $return = $this->LoginModel->login($email,$password);

                if($return){
                $_SESSION['admin'] = $email;
    
                header('Location:'.URLROOT.'ElectroSite/public/Admin/show');
                }else{
                    
                header('Location:'.URLROOT.'ElectroSite/public/Pages/signin');
                }
            }
        }

        public function doLogout(){
            
            session_start();
            session_unset();
            session_destroy();

            header('Location:'.URLROOT.'ElectroSite/public/Pages/index');
        }
}


?>