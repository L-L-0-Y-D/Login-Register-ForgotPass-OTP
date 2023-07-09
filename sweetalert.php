<?php
/* The MessageDisplay class in PHP is used to display a message with a specified status using the
SweetAlert library. */
class MessageDisplay {
    public function displayMessage($message, $status) {
        echo "
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
        <script>
            swal({
                title: '$message',
                icon: '$status',
                button: 'Okay',
                timer: 10500
            });
        </script>";
    }
}

/* ` = new MessageDisplay();` is creating a new instance of the `MessageDisplay` class.
This allows you to access the methods and properties of the `MessageDisplay` class using the
`` object. */
$messageDisplay = new MessageDisplay();

/* The code block is checking if the `['message']` variable is set. If it is set, it retrieves
the values of `['message']` and `['status']` and assigns them to the variables
`` and `` respectively. */
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    $status = $_SESSION['status'];

    $messageDisplay->displayMessage($message, $status);

    unset($_SESSION['message']);
    unset($_SESSION['status']);
}
    
?> 