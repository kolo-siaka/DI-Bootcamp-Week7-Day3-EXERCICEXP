<?php
session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "Welcome back, $username!";
} else {
    if (isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
        $username = $_SESSION['username'];
        echo "Welcome, $username! This is your first time here.";
    }else {
        echo '
        <form action="session_exercise.php" method="post">
            <label for="username">Entrez votre nom:</label>
            <input type="text" name="username" id="username">
            <input type="submit" value="Submit">
        </form>
        ';
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: session_exercise.php");
    exit;
}

echo '
  <form action="session_exercise.php" method="post">
    <input type="submit" name="logout" value="Logout">
  </form>
';
?>
