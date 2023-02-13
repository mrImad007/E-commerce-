<?php
    include('../controller/login.control.php');
    class logout extends checklogin {
        public function logOut(){

                session_start();
                session_unset();
                session_destroy();

                header('Location: ../view/index.php');
        }
    }

    $exe = new logout;
    $exe->logOut();
?>