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
                    <div class="content">
                        <span class="albumLink">
                            <img src="https://i.ytimg.com/vi/rb8y38eilRM/masresdefault.jpg" alt=""> 
                        </span>
                    </div>
                </div>

                <div id="nowPlayingCenter">

                    <div class="content playerControls">

                        <div class="buttons">
                            <button class="controlButton shuffle" title="Shuffle button">
                                <img src="assets/images/icons/shuffle.png" alt="shuffle button" />
                            </button>

                            <button class="controlButton previous" title="Previous button">
                                <img src="assets/images/icons/previous.png" alt="shuffle button" />
                            </button>

                            <button class="controlButton play" title="Play button">
                                <img src="assets/images/icons/play.png" alt="shuffle button" />
                            </button>

                            <button class="controlButton pause" title="Pause button" style="display: none;">
                                <img src="assets/images/icons/pause.png" alt="pause button" />
                            </button>

                            <button class="controlButton next" title="Next button">
                                <img src="assets/images/icons/next.png" alt="shuffle button" />
                            </button>

                            <button class="controlButton repeat" title="Repeat button">
                                <img src="assets/images/icons/repeat.png" alt="shuffle button" />
                            </button>

                        </div>

                        <div class="playbackBar">
                            <span clas="progressTime current">0.00</span>

                            <div class="progressBar">

                                <div class="progressBarBg">

                                    <div class="progress"></div>

                                </div>

                            </div>

                            <span clas="progressTime remaining">0.00</span>
                        </div>

                    </div>

                </div>

                <div id="nowPlayingRight">

                </div>

            </div>

        </div>

    </body>
</html>