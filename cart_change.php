<?php
session_start();
include "products.php";
if (isset($_GET["add"])){
    if (!isset($_SESSION["cart"])){
        $_SESSION["cart"] = array();
    }
    $new_product = get_product_by_name($_GET["add"],$products);
    array_push($_SESSION["cart"],$new_product);
    if ($_GET["detail_page"]==1){
        header("location: single-product-details.php?name=".$_GET["add"]);
    }
    else{ 
        eader("location: cart.php?name=".$_GET["add"]);
    }
}

if (isset($_GET["remove"])){
    $temp = $_SESSION["cart"];
    $_SESSION["cart"] = array();
    foreach ($temp as $item){
        if ($item["name"] != $_GET["remove"]){
            array_push($_SESSION["cart"],$item);
        }
    }
    if ($_GET["detail_page"]==1){
        header("location: single-product-details.php?name=".$_GET["remove"]);
    }
    else{ 
        header("location: cart.php?name=".$_GET["remove"]);
    }
}
?>