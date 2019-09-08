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
    <meta name = "description" content = "We have an cart built-in the website so the customers can easily view their products. Also, they can easily remove the products out of the cart. The cart links to our online payment method.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>User Cart| Hypeciety</title>
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
        <div class="offset-md-1 col-md-10 col-12 col-sm-12">
            <?php
            $total = 0.00;
            if (isset($_SESSION["cart"])){
            
            foreach ($_SESSION["cart"] as $product){
                echo'
            <!--Single Item display-->
            <div class="item-container">
                <div class="row">
                    <img class="col-12 col-md-3 col-sm-12" src="img/product-img/'.$product["images"][0].'.jpg">
                    <div class=" col-md-8 item-description">
                        <h4>$'.$product["price"].'</h4>
                        <p class="item-name">'.$product["name"].'</p>
                        <button class="remove-button"><a href="cart_change.php?remove='.$product["name"].'&detail_page=0" style="text-decoration:none !important;color:#ebebeb !important;">Remove</a></button>
                    </div>
                </div>
            </div>
            ';
            $total = $total + floatval($product["price"]);
            } 
        }
        ?>
        </div>
        <div class="total-amount col-md-3 offset-md-8 col-12 col-sm-12">
            <h3>Total: $<?php echo strval($total); ?>.00</h3>
        </div>
        
        <div class="col-md-3 offset-md-8 col-12 col-sm-12">
            <a href="payment-method.php"><button class="checkout-button">Check out</button></a>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>