<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted from the signup page
    if ($_POST['redirect'] === 'signup') {
        echo "<h2>Sign Up Successful</h2>";
        echo "<p>{$_POST['message']}</p>";
    } else {
        // Check if the form was submitted from the login page
        if ($_POST['redirect'] === 'login') {
            echo "<h2>Login Successful</h2>";
            echo "<p>{$_POST['message']}</p>";
        }
    }
}
// Provide a link back to the home page
echo '<p><a href="index.php">Go back to Home</a></p>';
