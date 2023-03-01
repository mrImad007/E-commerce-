<?php
include('../controller/login.control.php');

class check extends checklogin{
    public static function checking(){
        
        if(!isset($_SESSION['login'])){
            header('Location: ../view/signin.php');
        }
    }
}

check::checking(); 
?>