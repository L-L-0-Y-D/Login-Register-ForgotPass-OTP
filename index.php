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
</head>
<body>

    <div class="login-card">
        <h2>Login</h2>
        <h3>Enter your Credentials</h3>

        <form action="index.html" class="login-form" method="post">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <a href="forgotpassword.html">Forgot Password</a>
            <button type="submit" name="login" id="login">LOGIN</button>
            <label>Don't have an account? <a class="form-signup" href="signup.php">SIGN UP HERE</a></label>
        </form>

    </div>
    
</body>
</html>