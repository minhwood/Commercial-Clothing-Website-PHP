<?php
    session_start();
    if (!isset($_SESSION['username'])){
        $_SESSION['username'] = NULL;
    }
?>
<?php
    include "products.php";
?>
<?php
    $show_products = array();
    if (isset($_POST['filter'])) {
        foreach ($products as $product){
            if ($_POST['category'] == $product["category"] or $product["category"] == "All" or $_POST['category'] == "All"){
                if ($_POST['gender'] == $product["gender"] or $product["gender"] == "All" or $_POST['gender'] == "All") {
                    if ($_POST['brand'] == $product["brand"] or $product["brand"] == "All" or $_POST['brand'] == "All") {
                        array_push($show_products,$product);
                    }
                }
            }
        }
    }
    elseif (isset($_GET['filter'])){
        foreach ($products as $product){
            if ($_GET['filter'] == $product['category']){
                array_push($show_products,$product);
            }
        }
    }
    elseif (isset($_POST['search'])){
        foreach ($products as $product){
            if (strpos(strtolower($product['name']),strtolower($_POST['search'])) !== FALSE){
                array_push($show_products,$product);
            }
        }
    }
    else {
        $show_products = $products;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name = "description" content = "We offer many streetwear products. Such as Shirts, Jeans, Sweaters, Sneaker and Sliders. We make sure each product have pictures to show its condition, and we will have a clear detail information for each of the product, such as the size, the color and the brand. ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Product List-Cloths-Shoes| Hypeciety</title>
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
        <div class="row filter-box">
        <form action="product_list.php" method="post">
            <div class="custom-select-box col-md-3 col-sm-12">
                Category:
                <select name="category">
                    <option value="All">All</option>
                    <option value="T-shirt">T - shirt</option>
                    <option value="Sweater">Sweater</option>
                    <option value="Pant">Pant</option>
                    <option value="Coat">Coat & Jacket</option>
                    <option value="Sneaker">Shoes</option>
                </select>
            </div>
            <div class="custom-select-box col-md-3 col-sm-12">
                Gender:
                <select name="gender">
                    <option value="All">All</option>
                    <option value="Male">Male</option>
                    <option value="Gender">Female</option>
                </select>
            </div>
            <div class="custom-select-box col-md-3 col-sm-12">
                Brand:
                <select name="brand">
                    <option value="All">All</option>
                    <option value="Gucci">Gucci</option>
                    <option value="Bape">Bape</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="OFF-WHITE">OFF-WHITE</option>
                    <option value="Prada">Prada</option>
                    <option value="Supreme">Supreme</option>
                </select>
            </div>
            <div class="custom-select-box col-md-2 col-sm-12">
                <input type="submit" value="Filter" name="filter" >
            </div>
        </form>
        </div>
        <div class="col-12 product-grid">
            <div class="row">
                <!-- Single Product -->
                <?php
                    foreach ($show_products as $product){
                        echo '
                        <div class="col-12 col-sm-4 col-lg-3">
                            <div class="single-product-wrapper ">
                                <!-- Product Image -->
                                <div class="product-img d-flex justify-content-center">
                                    <img class="hover-img" src="img/product-img/'.$product["images"][0].'.jpg" alt="">
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <a href="single-product-details.php?name='.$product["name"].'">
                                        <h6>'.$product["name"].'</h6>
                                    </a>
                                    <p class="product-price">$'.$product["price"].'</p>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>