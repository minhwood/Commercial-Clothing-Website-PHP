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
    <meta name="description" content=" This page is a form about your payment methods. It includes the card number, CVV, expiration date and so on. You can pay by Credit Card or PayPal.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>User Payment Method, User Pay Detail| Hypeciety</title>
    <link rel="icon" href="img/logo-icon.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/script.js"></script>

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    
    <?php include 'navigation_bar.php'; ?>

    <div class="container body-content">
        <div class="offset-md-2 col-md-8 col-12 col-sm-12">
            <div class="registration-box">
                <h3>Confirm your payment method</h3>
                <form action="payment_summary.php" method="post">
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
                            <label for="form_cart_num"><b>Card Number</b></label>
                            <input id="form_cart_num" type="text" name="card_number" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" required="required" data-error="Card Number is required.">
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
                    <div class="offset-md-1 col-md-10">
                        <div class="form-group">
                            <label for="form_address"><b>Shipping Address</b></label>
                            <input id="form_address" type="text" name="address" class="form-control" placeholder="e.g 22 Swanton St, Melbounre, VIC 3000" required="required" data-error="Address is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <input type="submit" class="confirm-payment-button" value="Confirm Payment">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>