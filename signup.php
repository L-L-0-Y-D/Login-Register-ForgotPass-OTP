<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <title>Sign Up Page</title>
    <link rel="icon" href="picture/favicon.ico"/>
</head>
<body>

    <div class="signup-card">
        <div class="logo">
            <!-- <i class='bx bx-bitcoin'></i> -->
            <img src="picture/pepsi.png" alt="" width="100%" height="100%">
        </div>
        <h2>Create Account</h2>
        <form action="authentication.php" class="form-signup" method="post">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Password" required>
            <button type="submit" name="register" id="register">Sign Up</button>
        </form>
        <footer>
            Already have an account?
            <a class="redirect-signin"href="index.php">Login</a>
        </footer>
    </div>
    <?php include ('sweetalert.php'); ?>
</body>
</html>