<?php
    require('../model/log/login.model.php');

    class checklogin extends login {
        public function doLogin(){
                    
        if(isset($_POST['username']) && isset($_POST['password'])){

            $user = $_POST['username'];
            $password = $_POST['password'];
            
            $conn = new login();
            $conn->check($user,$password);
        }
    }
}

$exe = new checklogin();
$exe->doLogin();
?>