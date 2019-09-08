<?php 
    echo '
    <div class="account-navigation col-3">
        <h3>Hi, '.$_SESSION["username"].'</h3>
        <div class="row">
            <a class="col-12" href="account_details.php"><div class="account-navigation-item nav-item-active"><h5>My Details</h5></div></a>
        </div>
        <div class="row">
            <a class="col-12" href="account_orders.php"><div class="account-navigation-item" active><h5>My Orders</h5></div></a>
        </div>
        <div class="row">
            <a class="col-12" href="account_sell_product.php"><div class=" account-navigation-item"><h5>Sell an item</h5></div></a>
        </div>
        <div class="row">
            <a class="col-12" href="account_inventory.php"><div class="account-navigation-item"><h5>Inventory</h5></div></a>
        </div>
        <div class="row">
            <a class="col-12" href="account_details.php"><div class="account-navigation-item sign-out-item"><h5>Sign Out</h5></div></a>
        </div>
    </div>
    '
?>