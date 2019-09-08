<?php
    session_start();
    $file = "accounts.csv";
    $document = file_get_contents($file);
    $lines = explode("\n",$document);
    $accounts = array();
    foreach ($lines as $newline){
        $info = explode(",",$newline);
        $account = array(
            "username"=>$info[0],
            "password"=>$info[1]
        );
        array_push($accounts,$account);
    }

    if (isset($_POST['login'])){
        $_SESSION["username"] = NULL;
        foreach ($accounts as $account){
            if (strcmp($_POST['password'],$account["password"]) == 0 and strcmp($_POST['username'],$account["username"]) == 0 ){
                $_SESSION["username"] = $_POST["username"];
            }
        }
    }
    echo $_SESSION["username"];
    header('location: home.php');
?>