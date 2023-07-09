<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Forgot Password</title>
    <link rel="icon" href="picture/favicon.ico"/>
</head>
<body>
    
    <div class="forgotPassword-card">
        <div class="logo">
            <!-- <i class='bx bx-bitcoin'></i> -->
            <a href="index.php"><img src="picture/pepsi.png" alt="" width="100%" height="100%"></a>
        </div>
        <h2>Login</h2>
        <h2>Forgot Password</h2>
        <form action="authentication.php" class="forgotPassword-form" method="post">
            <input type="email" name="email" id="email" placeholder="Email Address">
            <button type="submit" name="forgotpassword" id="forgotpassword">Forgot Password</button>
        </form>
    </div>
    <?php include ('sweetalert.php'); ?>
</body>
</html>