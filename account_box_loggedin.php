<?php
    echo'<div class="account-div">
    <div class="col-12 account-div-el"><h4>Hi, '.$_SESSION["username"].'</h4></div>
    <div class="col-12 account-div-el"><a href="account_details.php"><input type="submit" class="profile-but" value="Your Profile"></a></div>
    <form action="sign_out.php">
        <div class="col-12 account-div-el"><input type="submit" class="sign-out-but"  value="Sign out"></div>
    </form>
</div>'
?>