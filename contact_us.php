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
    <meta name = "description" content = "We offer online help such as email contact form built-in website, and we also show our phone number, email address and address for our office. So, customers can check up the location of their products or get the invoices. We made sure that everyone is able to get in touch with us.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Contact Help | Hypeciety</title>
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
    <div class=" offset-md-2 col-md-8 justify-content-center">
        <form id="contact-form" method="post" action="contact_us_end.php" role="form">
            <div class="form-title">
                <h2>GET IN TOUCH</h2>
            </div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-8">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Lastname *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Please specify your need *</label>
                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value=""></option>
                                        <option value="Request quotation">Request quotation</option>
                                        <option value="Request order status">Request order status</option>
                                        <option value="Request copy of an invoice">Request copy of an invoice</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Send message">
                            </div>
                        </div>

                    </div>
                
                    <div class="col-md-4">
                        <h3>Contact</h3>
                        <div class="row">
                            <div class="col-md-5"><b>Email:</b></div>
                            <div class="col-md-7">support@hypeciety.com.au</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"><b>Hotline:</b></div>
                            <div class="col-md-7">1 800 XXX XXX</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"><b>Store:</b></div><br>
                            <div class="col-md-7">22 Bourke Street, Mebourne, VIC 3004</div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Thank you for using and trust in our services, please contact us through the email or hotline provide above or complete the form, we will provide support as soon as possible</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
  <!-- Footer -->
</body>

</html>