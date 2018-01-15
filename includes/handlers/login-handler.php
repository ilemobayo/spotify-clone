<?php

// login handler
if(isset($_POST['loginButton'])) {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    // call login function, returns true or false, success or failure
    $result = $account->login($username, $password);

    // if successful redirect to index page
    if($result) {
        // set a session
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}

?>