<?php
    include('../controller/login.control.php');
    class logout extends checklogin {
        public static function logOut(){

                session_start();
                session_unset();
                session_destroy();

                header('Location: ../view/index.php');
        }
    }

    logout::logOut();
?>