<?php
    include('../model/helpers/showCategory.model.php');

    $execution = new showCatg;
    $categories = $execution->allCategories();
?>