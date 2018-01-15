<?php

// config has session_start()
include("includes/config.php");

//session_destroy(); // to logout

// if the session is set allow viewing, otherwise redirect
    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    } else {
        header("Location: register.php");
    }
?>

<html>
    <head>
        <title>Welcome to Slotify!</title>
    </head>
    <body>
    INDEX PAGE
    </body>
</html>