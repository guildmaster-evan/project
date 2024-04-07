<?php
session_start();
require 'includes\connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Page</title>
    <style>
        :root {
            --viridian: #5D896Dff;
            --gunmetal: #14242Dff;
            --licorice: #291812ff;
            --tigers-eye: #B47021ff;
            --eerie-black: #21251Dff;
            --ivory: #fef1cf;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--gunmetal);
            color: var(--ivory);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .response-container {
            background-color: var(--viridian);
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .response-container h2 {
            color: var(--ivory);
        }

        .response-container p {
            color: var(--tigers-eye);
        }

        .response-container a {
            color: var(--licorice);
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="response-container">
        <?php
        // Check if the username is set in the session
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo '<h2>Welcome, ' . $username . '!</h2>';
        } else {
            echo '<h2>Welcome!</h2>';
        }

        // Display all usernames from the database
        $sql = "SELECT * FROM mytable";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo '<h3>All Usernames:</h3>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['username'] . "<br>";
            }
        } else {
            echo '<p>No usernames found.</p>';
        }
        // Provide a link back to the home page
        echo '<p><a href="index.php">Go back to Home</a></p>';
        ?>
    </div>
</body>

</html>