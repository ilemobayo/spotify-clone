<?php
 // turn on output buffering, wait till all data to send to server
ob_start();

// enable use of sessions
session_start();

// set the timezone
$timezone = date_default_timezone_set("America/Chicago");

// db connection
$con = mysqli_connect("localhost", "root", "", "slotify");

if(mysqli_connect_errno()) {
    echo "Failed to connect to DB: ". mysqli_connect_errno();
} 


?>