<?php
    include('../model/log/login.model.php');
    
    class checklogin extends login {
        public static function doLogin(){

        if(isset($_POST['email']) && isset($_POST['password'])){
            session_start();
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $conn = new login();
            $return = $conn->check($email,$password);

            if($return){
                $_SESSION['login']=$email;
                header('Location: ../view/dashboard.php');
            }else{
                header('location: ../view/signin.php');
            }
        }
    }
}

checklogin::doLogin();
?>