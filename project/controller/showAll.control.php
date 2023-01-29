<?php
    include('../model/helpers/showProducts.model.php');

    $execution = new show;
    $products = $execution->AllProducts();
?>