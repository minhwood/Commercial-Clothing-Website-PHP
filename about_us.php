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
    <meta name="description" content="This page shows the user our business ideas and what can we offer you.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Introduction, About Hypeciety| Hypeciety</title>
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
        <div class="col-md-10 offset-md-1 col-12">
            <div class="row">
                <div class="col-md-12 info-extends-title">
                    <h1>We are</h1>
                </div>
                <div class=""><img src="img/info-img/name.PNG"></div>
                <p><b>Hypeceity is a community focused marketplace for streetwear, making those expensive clothing more affordable than ever and accessible for everyone.</b></p>
                <p><b>Guaranteed Authentic Products At Their Best Prices</b></p>
                <p>The professionals working with Hypeceity have over 10 years experience with handling and dealing with streetwear. With a keen eye that can spot the slightest differences in quality, we at Hypeceity guarantee all clothing listed is of authentic nature and will be offered at the best prices after inspections.</p>
                <p><b>Get Quick Cash From Your Closet</b></p>
                <p>Have unwanted clothing that you’ve paid a hefty price for? Want them gone quick and receive fast and reliable transactions? Our community at Hypeceity ensure your clothing is valued at a price that favors your pockets while also staying eye catching to those like-minded buyers.</p>
                
            </div>
            
            
            <div class="row about-box">
                <div class="col-md-12 info-extends-title">
                    <h1>How we operate ?</h1>
                </div>
                <div>
                    <img src="img/info-img/how.PNG">
                </div>
                <div class="col-md-12 info-dialog">
                    <ul>
                        <li>The seller can either come to our physical store or go through a process on our website (delivery fees paid by seller)</li>
                        <li>Once hypeciety has hands on with the product we will conduct our professional analysis</li>
                        <li>Afterwards listing the product at what we’ve valued it as through our inspection</li>
                        <li>Potential buyers can now make a purchase for that item</li>
                        <li>Profit will be earned from a percentage cut from successfully sold products</li>
                    </ul>
                </div>
            </div>

            <div class="row about-box">
                <div class="col-md-12 info-extends-title ">
                    <h1>What do we have to offer ?</h1>
                </div>
                <div class="col-md-12 info-dialog">
                    <ul>
                        <li>Provide sellers with an open platform for product exposure</li>
                        <li>Sellers will be provided with a table presenting an estimated mark down value dependent on the clothing's condition</li>
                        <li>Professional analysis to determine if a product is authentic and the value it’s worth to our business</li>
                        <li>Detailed information for buyers - the condition, collection and rarity(limited edition)</li>
                    </ul>
                </div>
            </div>

            <div class="row about-box">
                <div class="col-md-12 info-extends-title">
                    <h1>Our Objective</h1>
                </div>
                <div class="col-md-12 info-dialog">
                    <ul>
                        <li>Aiming for expensive streetwear branded items as cheaper clothing makes earning a profit more difficult or even unprofitable</li>
                        <li>Creating an easy system for sellers to navigate through and buyers to complete purchases</li>
                        <li>Our services include authenticating the product legitimacy and value through professional manners. Getting in contact with buyers queries and handling deliveries</li>
                        <li>Accepting unwanted/unused brand-new, barely-used, second-hand items</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>