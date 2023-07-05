<?php
session_start();
include('config/dbconfig.php');


function redirect($location, $message, $status)
{
    $_SESSION['message'] = $message;
    $_SESSION['status'] = $status;
    header('Location: '. $location);
    exit();

}

function displayMessage($message, $status) {
    echo "
    <script>
        swal({
            title: '$message',
            icon: '$status',
            button: 'Okay',
            timer: 10500
        });
    </script>";
}