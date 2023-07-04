<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Sign Up Page</title>
    <link rel="icon" href="favicon.ico"/>
</head>
<body>

    <div class="card">
        <div class="logo">
            <!-- <i class='bx bx-bitcoin'></i> -->
            <img src="pepsi.png" alt="" width="100%" height="100%">
        </div>
        <h2>Create Account</h2>
        <form action="" class="form-signup" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <footer>
            Already have an account?
            <a class="redirect-signin"href="index.php">Login</a>
        </footer>
    </div>

    
</body>
</html>