<?php
    require('../model/log/login.model.php');

    class checklogin extends login {
        public function doLogin(){
                    
        if(isset($_POST['username']) && isset($_POST['password'])){
            session_start();
            
            $user = $_POST['username'];
            $password = $_POST['password'];
            
            $conn = new login();
            $conn->check($user,$password);

            $_SESSION['user']=$user;
        }
    }
}

$exe = new checklogin();
$exe->doLogin();
?>