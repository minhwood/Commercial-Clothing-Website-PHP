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
    <meta name = "description" content = "customers can change their default ways of payment in this section. Like change the card number or the expiration date.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Edit User Payment Details | Hypeciety</title>
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
                    <div class="row">
                        <div class="offset-md-1 col-md-10">
                            <b>Payment method</b>
                        </div>
                        <div class="offset-md-1 col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="credit" id="credit" value="option1" checked>
                                <label class="form-check-label" for="credit">
                                    Credit Card
                                </label>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paypal" id="paypal" value="option2">
                                <label class="form-check-label" for="paypal">
                                    Paypal
                                </label>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="offset-md-1 col-md-10">
                            <div class="form-group">
                                <label for="form_name"><b>Name on Card</b></label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="e.g Bill Gate" required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-md-1 col-md-10">
                            <div class="form-group">
                                <label for="form_cart_num"><b>Cart Number</b></label>
                                <input id="form_cart_num" type="text" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" required="required" data-error="Cart Number is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-md-1 col-md-3">
                            <div class="form-group">
                                <label for="form-expr"><b>Expiration</b></label>
                                <input id="form" type="date" class="form-control" placeholder="e.g 19/20" required="required" data-error="Date is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-3">
                            <div class="form-group">
                                <label for="form_cvv"><b>CVV</b></label>
                                <input id="form_cvv" type="number" class="form-control" placeholder="e.g 111" required="required" data-error="CVV is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-3 col-3">
                            <a href="account_details.php"><input type="submit" value="Save" class="confirm-edit-button"></a>
                        </div>
                        <div class="col-3">
                            <a href="account_details.php"><input type="submit" value="Cancel" class="cancel-edit-button"></a>
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