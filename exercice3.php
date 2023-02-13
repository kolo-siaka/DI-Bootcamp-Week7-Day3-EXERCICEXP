<?php

// Start the session
session_start();

// Set session variables using the global $_SESSION variable
$_SESSION['first_name'] = 'Yao';
$_SESSION['last_name'] = 'Yann';

// Display the session variables on the page
echo 'First name: ' . $_SESSION['first_name'] . '<br>';
echo 'Last name: ' . $_SESSION['last_name'];

?>
