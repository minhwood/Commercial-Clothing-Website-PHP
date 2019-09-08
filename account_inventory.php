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
    <meta name="description" content="This page shows you that your inventory ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>User Inventory| Hypeciety</title>
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
                <h3>Inventory</h3>
                <div class="offset-1 col-10 inventory-item">
                    <div class="row">
                        <div class="col-2"><img src="img/product-img/20.jpg"></div>
                        <div class="col-8">
                            <div class="col-12">
                                <b>A Bathing Ape Bape X Isetan Japan Full Zipper Hoodie Jacket</b>
                            </div>
                            <div class="col-12">
                                $233.00
                            </div>
                            <div class="col-12">
                                Status: Available
                            </div>
                            <div class="col-12">
                                Posted On: 12/12/12
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offset-1 col-10 inventory-item">
                    <div class="row">
                        <div class="col-2"><img src="img/product-img/15.jpg"></div>
                        <div class="col-8">
                            <div class="col-12">
                                <b>Dickies Jumpsuit</b>
                            </div>
                            <div class="col-12">
                                $292.00
                            </div>
                            <div class="col-12">
                                Status: Sold
                            </div>
                            <div class="col-12">
                                Purchased On: 12/12/12
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