<!-- ##### Header Area Start ##### -->
<?php 
echo '<header class="header_container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="nav-brand" href="home.php"><img src = "img/logo-2.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="product_list.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Clothes</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="product_list.php?filter=T-shirt">T-Shirt</a>
                        <a class="dropdown-item" href="product_list.php?filter=Shirt">Shirt</a>
                        <a class="dropdown-item" href="product_list.php?filter=Pant">Pant</a>
                        <a class="dropdown-item" href="product_list.php?filter=Sweater">Sweater</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="product_list.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Shoes</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="product_list.php?filter=Sneaker">Sneaker</a>
                        <a class="dropdown-item" href="product_list.php?filter=Slider">Slider</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="">
            <div class="search-icon navbar-icon">
                <a href="#" onclick="openSearchDialog()"><img src="img/icon-img/search.svg" alt=""></a>
            </div>
            <div class="user-login-info navbar-icon">
                <a href="#" onclick="openCloseAccountDialogBox()" ><img src="img/icon-img/user.svg" alt=""></a>'?>
            <?php 
            if ($_SESSION["username"] == NULL) {
                include "account_box.php";
            }
            else {
                include "account_box_loggedin.php";
            } 
            echo'
            </div>
            <!-- Cart Area -->
            <div class="cart-area navbar-icon">
                <a href="cart.php"><img src="img/icon-img/bag.svg" alt=""></a>
            </div>
        </div>   
    </nav>
    <div class="search-area col-md-12">
        <form action="product_list.php" method="post">
            <div class="offset-1 col-12 col-sm-12 col-md-10 row">
                <input class="col-11" type="search" name="search" id="headerSearch" placeholder="Type for search">
                <img onclick="closeSearchDialog()" class="col-1 col-md-1" src="img/icon-img/cancel.svg" alt="">
                <input type="submit" style="display:none;">
            </div>
        </form>
    </div>
</header>'
?>