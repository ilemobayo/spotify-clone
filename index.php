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
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body>
    
        <div id="nowPlayingBarContainer">

            <div id="nowPlayingBar">

                <div id="nowPlayingLeft">

                </div>

                <div id="nowPlayingCenter">

                    <div class="content playerControls">

                        <div class="buttons">
                            <button class="controlButton shuffle" title="Shuffle button">
                                <img src="assets/images/icons/shuffle.png" alt="shuffle button" />>
                            </button>
                        </div>

                    </div>

                </div>

                <div id="nowPlayingRight">

                </div>

            </div>

        </div>

    </body>
</html>