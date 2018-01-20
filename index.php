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

        <div id="mainContainer">

            <div id="topContainer">

                <div id="navBarContainer">
                    <nav class="navBar">
                        <a href="index.php" class="logo">
                            <img src="assets/images/icons/logo.png" alt="logo">
                        </a>

                            <div class="group">
                                <div class="navItem">
                                    <a href="search.php" class="navitemLink">Search
                                        <img src="assets/images/icons/search.png" class="icon" alt="search" />
                                    </a>
                                </div>
                            </div>

                            <div class="group">
                                <div class="navItem">
                                    <a href="browse.php" class="navitemLink">Browse</a>
                                </div>

                                <div class="navItem">
                                    <a href="yourMusic.php" class="navitemLink">Your music</a>
                                </div>

                                <div class="navItem">
                                    <a href="profile.php" class="navitemLink">Marc Holman</a>
                                </div>
                            </div>

                    </nav>
                </div>

            </div>

            <div id="nowPlayingBarContainer">

            <div id="nowPlayingBar">

            <div id="nowPlayingLeft">
                <div class="content">
                    <span class="albumLink">
                        <img class="albumArtwork" src="https://i.ytimg.com/vi/rb8y38eilRM/masresdefault.jpg" alt=""> 
                    </span>

                    <div class="trackInfo">
                        <span class="trackName">
                            <span>Happy Birthday</span>
                        </span>

                        <span class="artistName">
                            <span>Marc Holman</span>
                        </span>
                    </div>
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
                <div class="volumeBar">
                    <button class="controlButton volume" title="Volume button">
                        <img src="assets/images/icons/volume.png" alt="volume">
                    </button>

                    <div class="progressBar">

                        <div class="progressBarBg">

                            <div class="progress"></div>

                        </div>

                    </div>

                </div>
        </div>

</div>

</div>

        </div>
    
        

    </body>
</html>