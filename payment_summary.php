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
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Hypeciety</title>
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
                <h3>Thank you for your payment</h3>
                <br>
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <p><b>Purchased Items</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <?php
                        $total = 0;
                            foreach ($_SESSION["cart"] as $item){
                                echo '<p>'.$item["name"].'- $'.$item["price"].'</p>';
                                $total  = $total + floatval($item["price"]);
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <p><b>Total Pay Amount: $<?php echo strval($total).'.00'; ?></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <p>Name on Card:  <?php echo $_POST["name"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <p>Card Number:  <?php echo $_POST["card_number"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <p>Shipping Adress:  <?php echo $_POST["address"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h3><a href="home.php">Back to the Home Page</a></h3> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        $_SESSION["cart"] = array();
    ?>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>