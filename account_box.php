<?php 
echo '<div class="account-div">
<form action="login_validation.php" method="post">
    <input class="login-box-input" name="username" type="text" placeholder="Username" required>
    <input class="login-box-input" name="password" type="password" placeholder="Password" required>
    <button class="login-box-button" name="login" type="submit">Login</button>
</form>
<a href="registration.php" >Join Us</a>
</div>'
?>