<?php
    session_start();
    if (!isset($_SESSION['username'])){
        $_SESSION['username'] = NULL;
    }
?>
<?php
    $file = "accounts.csv";
    $document = file_get_contents($file);
    $lines = explode("\n",$document);
    foreach ($lines as $newline){
        $info = explode(",",$newline);
        if ($info[0] == $_SESSION['username'])
        $account = array(
            "username"=>$info[0],
            "password"=>$info[1],
            "email"=>$info[2],
            "firstname"=>$info[3],
            "lastname"=>$info[4],
            "street"=>$info[5]
        );
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "customer user details and payment method">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>User Details | Hypeciety</title>
    <link rel="icon" href="img/logo-icon.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/script.js"></script>

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    
    <?php include 'navigation_bar.php'; ?>

    <div class="container body-content account">
        <div class="row account-container">
            <?php
                include 'account_details_navigation.php';
            ?>
            <div class="account-info-dialog col-9">
                <h3>My Details</h3>
                <div class="offset-md-1 col-md-10 col-12 col-sm-12 account-info-content">
                    <div class="account-details-content">
                        <div class="row">
                            <div class="col-9">
                                <h4><b>Details:</b></h4>  
                            </div>
                            <div class="col-3">
                                <a href="account_details_edit_details.php"><input type="submit" class="edit-button" value="Edit"></a>
                            </div>
                        </div>
                          
                        <div class="row">
                            <div class="col-5">
                                <label><b>Firstname:</b></label>
                            </div>
                            <div class="col-7">
                                <label><?php echo $account["firstname"]; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label><b>Lastname:</b></label>
                            </div>
                            <div class="col-7">
                                <label><?php echo $account["lastname"]; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label><b>Shipping Address:</b></label>
                            </div>
                            <div class="col-7">
                                <label><?php echo $account["street"]; ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="payment-method-info">
                        <div class="row">
                            <div class="col-9">
                                <h4><b>Payment Method:</b></h4>
                            </div>
                            <div class="col-3">
                                <a href="account_details_edit_payment.php"><input type="submit" class="edit-button" value="Edit"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label>XXXX-XXXX-XXXX-1234</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label><b>Expiry date:</b></label>
                            </div>
                            <div class="col-7">
                                <label>01/14<label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label><b>Cart Holder:</b></label>
                            </div>
                            <div class="col-7">
                                <label>Megan Pham<label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>