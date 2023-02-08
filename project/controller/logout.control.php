<?php
    require('../model/log/login.model.php');
    class logout extends login {
        public function logingOut(){
            if(isset($_SESSION['login'])){
                session_start();
                session_unset();
                session_destroy();
                header('Location: ../view/index.php');
            }
            else{
                header('Location: ../view/index.php');
            }
        }
    }
?>