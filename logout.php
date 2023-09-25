<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'true') {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Set a session variable to indicate logout
    $_SESSION['logged_out'] = true;
}

// Redirect the user to the login page
header('location: login.php');
exit();
?>
