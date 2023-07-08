<?php include 'validation.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reset Password</title>
    <link rel="icon" href="picture/favicon.ico"/>
</head>
<body>
    
    <div class="resetPassword-card">
        <div class="logo">
            <!-- <i class='bx bx-bitcoin'></i> -->
            <a href="index.php"><img src="picture/pepsi.png" alt="" width="100%" height="100%"></a>
        </div>
        <h2>Login</h2>
        <h2>Reset Password</h2>
        <form action="authentication.php" class="resetPassword-form" method="post">
            <input type="password" name="newpassword" id="newpassword" placeholder="New Password">
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
            <button type="submit" name="resetpassword" id="resetpassword">Reset Password</button>
        </form>
    </div>
    
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php include ('sweetalert.php'); ?>
</body>
</html>