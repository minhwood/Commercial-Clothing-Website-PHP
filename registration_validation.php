<?php
    $file = "accounts.csv";
    $document = file_get_contents($file);
    $lines = explode("\n",$document);
    $accounts = array();
    foreach ($lines as $newline){
        $info = explode(",",$newline);
        $account = array(
            "username"=>$info[0],
            "password"=>$info[1],
            "email"=>$info[2]
        );
        array_push($accounts,$account);
    }

    function valid_email($email,$accounts){
        $valid = TRUE;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            foreach ($accounts as $account){
                if (strcmp($email,$account["email"]) == 0){
                    $valid = FALSE;
                }
            }
        }
        else {
            $valid = FALSE;
        }
        return $valid;
    }

    function valid_password($password, $cf_password){
        if (strlen($password)>=8 and $password==$cf_password){
            return TRUE;
        }
        else {
            return FALSE;
        }
    }

    function valid_username($username, $accounts){
        $valid = TRUE;
        if (strlen($username) >= 8){
            foreach ($accounts as $account){
                if (strcmp($username,$account["username"]) == 0){
                    $valid = FALSE;
                }
            }
        }
        else {
            $valid = FALSE;
        }
        return $valid;
    }


    $new_account = "";
    if (isset($_POST['register'])){
        if (valid_email($_POST["email"],$accounts) and valid_password($_POST["password"], $_POST["cf_password"]) and valid_username($_POST["username"],$accounts)){
            $new_account = $_POST["username"].",".$_POST["password"].",".$_POST["email"].",".$_POST["name"].",".$_POST["surname"].",".$_POST["address"].",".$_POST["gender"];
            echo "<br>".$new_account."<br>";
            file_put_contents($file,"\n",FILE_APPEND);
            file_put_contents($file, $new_account, FILE_APPEND);
            $messages = 'Your account have been successfully created ';    
            header('location: registration.php?success='.$messages);
        }
        else {
            $messages = "fail to create account, please check all your input";
            header('location: registration.php?fail='.$messages);
        }
    }
?>

