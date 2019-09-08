<?php
    session_start();
    if (!isset($_SESSION['username'])){
        $_SESSION['username'] = NULL;
    }
?>
<?php
    include "products.php";
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/script.js"></script>

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    
    <?php include 'navigation_bar.php'; ?>
    <?php
        $product = get_product_by_name($_GET["name"],$products);
        echo '
        <div class="container body-content">
            <div class="row">
                <div class="col-md-5 col-12 col-sm-12">
                    <div class="w3-content w3-display-container">';
                    foreach ($product["images"] as $image){
                    echo '<img class="mySlides" src="img/product-img/'.$image.'.jpg" style="width:100%">';
                    }
                        echo'
                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                    <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);
                    </script>
                </div>
                <div class="col-md-7 col-12 col-sm-12 description-box">
                    <div class="description-box-in">
                        <p class="brand-tag">Bape</p>
                        <p class="product-name">'.$product["name"].'</p>
                        <p class="price-tag">$'.$product["price"].'</p>
                        <p><b> SIZE: '.$product["size"].'</b></p>
                        <P class="description-content">
                            '.$product["description"].'
                        </p>';
                        if (isset($_SESSION['cart'])) {
                            $in_cart = FALSE;
                            foreach($_SESSION['cart'] as $item){
                                if ($item["name"] == $product["name"]){
                                   $in_cart = TRUE;
                                }
                            }
                            if ($in_cart == FALSE){
                                echo '<button class="add-to-cart-button" type="submit"><a href="cart_change.php?add='.$product["name"].'&detail_page=1" style="text-decoration: none;
                                color: #ebebeb;">Add to Cart</a></button>';
                            }
                            else {
                                echo '<button class="add-to-cart-button" type="submit" style="background-color:#dc0345;"><a href="cart_change.php?remove='.$product["name"].'&detail_page=1" style="text-decoration: none;
                                color: #ebebeb;">Remove from Cart</a></button>';
                            }
                        }
                        else {
                            echo '<button class="add-to-cart-button" type="submit" ><a a href="cart_change.php?add='.$product["name"].'&detail_page=1" style="text-decoration: none; color: #ebebeb;">Add to Cart</a></button>';
                        }
                    echo '</div>
                </div>
            </div>
        </div>';
    ?>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>