<?php
    session_start();
    if (!isset($_SESSION['username'])){
        $_SESSION['username'] = NULL;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="This page is for users who wants to sell their product. They can import pictures of their products and complete the form on the page then submit it, our team will go through them and let you know whether your product is okay to sell on our platform.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Sell Your Product | Hypeciety</title>
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
            <div class="account-info-dialog col-9 ">
                <h3>Sell an Item</h3>
                <div class="col-10 offset-1 account-sell-item-content">
                    <div class="row">
                        <div class="col-2"><input type="submit" class="import-button" value="Import"></div>
                        <input id="form_cart_num" type="text" class="form-control col-6" placeholder="20.jpg" >
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Insert a select few pitures of the product from different angles.</p>
                            <p>We will examize the product and in the next few days you will receive an email whether or not your product is worthy to being personally assessed by our team.</p>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="col-12">Additional Message</h4>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" value="Submit">
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