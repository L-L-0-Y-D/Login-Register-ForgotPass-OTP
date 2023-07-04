<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <link rel="icon" href="favicon.ico"/>
</head>
<body>

    <div class="login-card">
        <div class="logo">
            <!-- <i class='bx bx-bitcoin'></i> -->
            <img src="pepsi.png" alt="" width="100%" height="100%">
        </div>
        <h2>Login</h2>
        <h2>Login</h2>

        <form action="index.html" class="login-form" method="post">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <a href="forgotpassword.html">Forgot Password</a>
            <button type="submit" name="login" id="login">LOGIN</button>
        </form>
        <footer class="footer-signin">
            Don't have an account?
            <a class="footer-redirect-signup" href="signup.php">SIGN UP HERE</a> 
        </footer>
    </div>
    
    <script src="sweetalert2.all.min.js"></script>
</body>
</html>