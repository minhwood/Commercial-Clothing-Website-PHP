<?php 
    session_start();
    $_SESSION["username"] = NULL;
    header('location: home.php');
?>