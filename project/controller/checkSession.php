<?php
include('../controller/login.control.php');

class check extends checklogin{
    public function checking(){
        
        if(!isset($_SESSION['login'])){
            header('Location: ../view/signin.php');
        }
    }
}

$check = new check;
$check->checking();
?>