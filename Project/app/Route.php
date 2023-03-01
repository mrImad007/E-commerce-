<?php
require_once ('config/root.php');

// Autoloading Libraries

spl_autoload_register(function($class){
    require_once ('library/' .$class. '.php');
});

?>