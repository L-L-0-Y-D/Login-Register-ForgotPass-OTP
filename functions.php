<?php
session_start();
include('config/dbconfig.php');

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

function sendOTPMailer($email, $otp)
{

    //Server settings
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //$mail->SMTPDebug = 2; 
    $mail->isSMTP();
    $mail->SMTPAuth   = true; 

    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "user@example.com";
    $mail->Password   = "gliubpwerozdvmei";

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;
        
    $mail->setFrom("user@example.com", "OTP Authentication");
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'OTP Authentication'; 

    $email_template = "
    <b>Dear User</b>
    <h1>Here is your OTP <$otp></h1>
    ";

    $mail->Body    = $email_template;
    $mail->send();
    // echo 'Message has been sent';
    redirect("../index.php", "Password Reset Link Send Successfully Please Check Your Email", "success");
   

}

function sendResetPasswordMailer($email, $verify_token)
{

    //Server settings
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //$mail->SMTPDebug = 2; 
    $mail->isSMTP();
    $mail->SMTPAuth   = true; 

    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "user@example.com";
    $mail->Password   = "gliubpwerozdvmei";

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;
        
    $mail->setFrom("user@example.com", "Reset Password");
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Reset Password'; 

    $email_template = "
    <b>Dear User</b>
    <h3>We received a request to reset your password.</h3>
    <p>Kindly click the below link to reset your password</p>
    <a href='http://localhost:3000/resetpassword.php?token=$verify_token'>Click here<a>
    ";

    $mail->Body    = $email_template;
    $mail->send();
    // echo 'Message has been sent';
    redirect("../index.php", "Password Reset Link Send Successfully Please Check Your Email", "success");
   

}


function redirect($location, $message, $status)
{
    $_SESSION['message'] = $message;
    $_SESSION['status'] = $status;
    header('Location: '. $location);
    exit();

}

