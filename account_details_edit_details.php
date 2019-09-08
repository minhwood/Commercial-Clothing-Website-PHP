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
    <meta name = "description" content = "change the user details like first name, second name and the address.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Edit User personal Details | Hypeciety</title>
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
                <h3>My Details</h3>
                <div class="offset-md-1 col-md-10 col-12 col-sm-12 account-info-content">
                    <div class="account-details-content account-details-content-edit">
                        <div class="row">
                            <div class="col-9">
                                <h4><b>Details:</b></h4>  
                            </div>
                        </div>
                          
                        <div class="row">
                            <div class="col-5">
                                <label for="form_firstname"><b>Firstname:</b></label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="form_firstname" class="form-control" value="Minh">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="form_lastname"><b>Lastname:</b></label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="form_lastname" class="form-control" value="Doan Quang">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="form_address"><b>Shipping Address:</b></label>
                            </div>
                            <div class="col-7">
                                <input type="text" id="form_address" class="form-control" value="22 Swanton Str, Melbourne, VIC 3000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-3 col-3">
                                <a href="account_details.php"><input type="submit" value="Save" class="confirm-edit-button"></a>
                            </div>
                            <div class="col-3">
                                <a href="account_details.php"><input type="submit" value="Cancel" class="cancel-edit-button"></a>
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