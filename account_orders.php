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
    <meta name="description" content="This page shows that the order status for the user. Our team is going to track down each transaction using the shown order number and mark the stock delivered or not. User can also use this page to track their product.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>User Order Details Status | Hypeciety</title>
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
                <h3>My Orders</h3>
                <div class="offset-1 col-10 order-item">
                    <div class="row">
                        <div class="col-4" style="color:red">PROCESSING</div>
                        <div class="col-4">Order ID</div>
                        <div class="col-4">Shipped Date</div>
                    </div>
                    <div class="row">
                        <div class="offset-4 col-4">343686756</div>
                        <div class="col-4">26, Sep, 2019</div>
                    </div>
                    <div class="row">
                        <div class="col-5 small-product-img">
                            <img class="" src="img/product-img/20.jpg">
                            <img class="" src="img/product-img/20.2.jpg">
                        </div>
                        <div class="col-6">
                            <input type="submit" value="Track Order" class="track-order-button">
                        </div>
                    </div>
                </div>
                <div class="offset-1 col-10 order-item">
                    <div class="row">
                        <div class="col-4" style="color:green">DELIVERED</div>
                        <div class="col-4">Order ID</div>
                        <div class="col-4">Shipped Date</div>
                    </div>
                    <div class="row">
                        <div class="offset-4 col-4">343686756</div>
                        <div class="col-4">26, Sep, 2019</div>
                    </div>
                    <div class="row">
                        <div class="col-5 small-product-img">
                            <img class="" src="img/product-img/19.jpg">
                        </div>
                        <div class="col-6">
                            <input type="submit" value="Track Order" class="track-order-button">
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