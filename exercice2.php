<?php

// Check if the form has been submitted
if (isset($_POST['username'])) {
    // Store the username in a cookie
    setcookie('username', $_POST['username'], time() + (86400 * 30), "/"); // 86400 = 1 day

    // Redirect to the home page
    header("Location: exercice2.php");
    exit;
}

// Check if the cookie is set
if (isset($_COOKIE['username'])) {
    // Display a message to indicate a successful login
    echo "Welcome back, " . $_COOKIE['username'];
} else {
    // Display a login form
    echo '<form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="submit" value="Login">
    </form>';
}

?>
