<?php
 include 'validation.php';
 $authorizationHandler = new AuthorizationHandler();
 $authorizationHandler->checkAuthorization();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <link rel="icon" href="picture/favicon.ico"/>
</head>
<body>

    <div class="otp-card">
        <div class="logo">
            <!-- <i class='bx bx-bitcoin'></i> -->
            <a href="index.php"><img src="picture/pepsi.png" alt="" width="100%" height="100%"></a>
        </div>  
        <h2>OTP Verification</h2>
        <form action="authentication.php" class="otp-form" method="post">
            <input type="number" name="otp" id="otp" placeholder="Enter your OTP number">
            <button type="submit" name="otpverify" id="otpverify">Verify</button>
        </form>
    </div>
    <?php include ('sweetalert.php'); ?>
</body>
</html>