<?php
    require('../model/log/login.model.php');
    class logout extends login {
        public function logingOut(){
            if(isset($_SESSION['user'])){
                session_start();
                session_unset($_SESSION['user']);
                session_destroy($_SESSION['user']);
    
                header('Location: ../view/index.php');
            }
            else{
                header('Location: ../view/index.php');
            }
        }
    }
?>