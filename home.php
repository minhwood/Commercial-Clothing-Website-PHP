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
    <meta name="description" content="Hypeciety is an Australian second-hand streetwear online store. We are making those expensive clothing more affordable than ever and accessible for everyone. We promise the customers guaranteed authentic products at their best prices; and make sure the sellers to get quick cash from their closet. We do have a office for checking up seller's products and to provide the customers any help they need">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Home | New Products | Hypeciety</title>
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
        <div class="col-12">

            <div class="slideshow">
                <img class="slides" src="img/cover-img/C1.jpg">
                <img class="slides" src="img/cover-img/C2.jpg">
                <img class="slides" src="img/cover-img/C3.jpg">
            </div>

            <script>
                carousel();
            </script>

            <div class="row justify-content-center">
        
            <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/cover-img/bg-4.png);">
                    <div class="category-content">
                        <a href="product_list.php">All Products</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/cover-img/bg-2.png);">
                    <div class="category-content">
                        <a href="product_list.html">Clothing</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/cover-img/bg-3.png);">
                    <div class="category-content">
                        <a href="product_list.html">Shoes</a>
                    </div>
                </div>
            </div >
            
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>