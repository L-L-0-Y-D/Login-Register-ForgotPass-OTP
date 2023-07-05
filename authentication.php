<?php

include('functions.php');

if(isset($_POST['register'])){
    /* The code is using the `mysqli_real_escape_string()` function to escape special characters in the
    user input before storing them in variables. This function helps prevent SQL injection attacks
    by ensuring that any special characters in the input are properly escaped and treated as literal
    characters rather than SQL code. The function takes two parameters: the database connection
    object (``) and the user input value (`['name']`, `['email']`,
    `['password']`, `['passwordConfirm']`). The escaped values are then assigned to the
    respective variables (``, ``, ``, ``). */
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $confirmPassword = mysqli_real_escape_string($con,$_POST['passwordConfirm']);

    /* The line ` = 'name='..'&email='.;` is creating a string that contains the
    user's name and email address. It is used to pass this data as a query parameter in the redirect
    URL if there is an error during the registration process. */
    $user_data = 'name='.$name.'&email='.$email;

    /* The code is performing a database query to check if the entered email address already exists in
    the "users" table. */
    $check_email_query = "SELECT * FROM user WHERE email='$email'";
    $check_email_query_run = mysqli_query($con,$check_email_query);

    /* This code block is responsible for validating the user's input and performing the registration
    process if the input is valid. */
    if(mysqli_num_rows($check_email_query_run) > 0){

        /* The `redirect()` function is used to redirect the user to a different page. In this case, it
        is redirecting the user to the "signup.php" page with additional query parameters in the
        URL. */
        redirect("signup.php?error=check_email&{$user_data}","Email Already Exists", "warning");

    }else{

        if($password == $confirmPassword){

            if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#&_$!%*?&])[A-Za-z\d@#&_$!%*?&]{8,}$/",$password)){

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $insert_user_query = "INSERT INTO user (name, email, password, status) VALUES ('$name', '$email', '$hashed_password', '0')";
                $insert_user_query_run = mysqli_query($con,$insert_user_query) or die("bad query: $insert_user_query");

                if($insert_user_query_run){
                    //insert Email function for OTP

                    redirect("index.php", "Register Successfully", "success");

                }else{

                    redirect("signup.php", "Something Went Wrong", "error");
                }

            }else{

                redirect("signup.php?error=password&{$user_data}","Password Must Contain 8 Characters, 1 Uppercase, 1 Lowercase, 1 Number, 1 Special Character", "warning");
            }
            
        }else{

            redirect("signup.php?error=check_password&{$user_data}","Passwords Do Not Match", "warning");

        }

    }




}

?>