<?php
// Start a session to access session variables
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<h2>Welcome, $username!</h2>";
    echo "<p>You are now logged in.</p>";
} else {
    echo "<h2>Unauthorized Access</h2>";
    echo "<p>Please log in to access this page.</p>";
    echo '<a href="login.php">Login</a>';
}

// Check if there is a message from the registration process
if (isset($_SESSION['registration_message'])) {
    echo "<p>{$_SESSION['registration_message']}</p>";
    // Clear the registration message to avoid displaying it on subsequent visits
    unset($_SESSION['registration_message']);
}

// Provide a link back to the home page
echo '<p><a href="index.php">Go back to Home</a></p>';
