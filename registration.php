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
    <meta name="description" content="Users can click the little person on the right top corner of our website and click Join Us button. You can register your personal account after you complete the form.">	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Sign Up Form, Registration| Hypeciety</title>
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
                <h3>Sign Up with ...</h3>
                <?php
                if (isset($_GET["success"])){
                    echo'<h5 style="color:green;"> '.$_GET["success"].'</h5>';
                } 
                elseif (isset($_GET["fail"])){
                    echo'<h5 style="color:red;"> '.$_GET["fail"].'</h5>';
                }   
                ?>
                <form action="registration_validation.php" method="post">
                <div class="row">
                    <div class="offset-md-1 col-md-5">
                        <div class="form-group">
                            <label for="form_name">Firstname</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="First name" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="form_lastname">Lastname</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last name" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-8">
                        <div class="form-group">
                            <label for="form_email">E-mail</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="E-mail" required="required" data-error="E-mail is required.">
                            <p style="font-size:12px;">e.g: xxxxx@gmail.com</p>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="form_gender">Gender</label>
                            <select id="form_gender" name="gender" class="form-control" required="required" data-error="Please specify your gender.">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <div class="form-group">
                            <label for="form_username">Username</label>
                            <input id="form_username" type="text" name="username" class="form-control" placeholder="Username" required="required" data-error="Username must have at least than 8 characters.">
                            <p style="font-size:12px;">Username must have at least 8 characters</p>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-5">
                        <div class="form-group">
                            <label for="form_password">Password</label>
                            <input id="form_password" type="password" name="password" class="form-control" placeholder="Password" required="required" data-error="Password must have at least 8 characters.">
                            <p style="font-size:12px;">Password must have at least 8 characters</p>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="form_password_cf">Password Confirm</label>
                            <input id="form_password_cf" type="password" name="cf_password" class="form-control" placeholder="Confirm your password" required="required" data-error="Password must have at least than 8 characters.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                        <div class="form-group">
                            <label for="form_address">Address</label>
                            <input id="form_address" type="text" name="address" class="form-control" placeholder="Shipping address" required="required" data-error="Address is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div clas="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <p class="accept-policy">By creating your account, you agree to our <u>Terms and Conditions</u> & <u>Privacy Policy</u></p>
                    </div>
                </div>
                <div clas="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <input type="submit" name="register" class="join-button" value="Join">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>