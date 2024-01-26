<?php
session_start();
$pgTitle = 'Logout';
require '../layout.php';

// Remove user data from session
unset($_SESSION["logged_in"]);
unset($_SESSION["user_id"]);
unset($_SESSION["username"]);

// Destroy session
session_destroy();

// Redirect to login page
header("Location: login.php");
exit;
?>