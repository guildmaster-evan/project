<?php
require 'includes\connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="response-container">
        <div class="account-row1">
            <h1 class="account-heading">Account</h1>
        </div>

        <div class="account-row2">
            <div class="account-user">
                <?php
                // Check if the username is set in the session
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    echo '<h2>Welcome, ' . $username . '!</h2>';
                } else {
                    echo '<h2>Welcome!</h2>';
                }
                ?>
            </div>
            <div class="account-row2-col">
                <div class="account-row2-col1">
                    <p>
                    <h2>Order History</h2>
                    </p>
                    <p>(You have no orders on record.)</p>
                </div>
                <div class="account-row2-col2">
                    <p>
                    <h2>Account Details</h2>
                    </p>
                    <p>PHONE: (123)-456-7890</p>
                    <p>EMAIL: user12345@guildmail.com</p>
                    <p>Loyalty Points: 420</p>
                </div>
            </div>
        </div>

        <div class="account-linkHome">
            <p><a href="index.php">Go back to Home</a>
        </div>
    </div>
    <!-- Additional content can be added here -->
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>