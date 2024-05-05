<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Define animation for clicking motion */
        @keyframes click {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Apply animation to button when clicked */
        button:active {
            animation: click 0.1s linear;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="login-page-container">
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class="usererror">Fill in all fields!</p>';
            } else if ($_GET['error'] == "invalid") {
                echo '<p class="usererror">Username is invalid!</p>';
            } else if ($_GET['error'] == "passwords_do_no_match") {
                echo '<p class="usererror">Passwords do not match!</p>';
            } else if ($_GET['error'] == "usertaken") {
                echo '<p class="usererror">Username is taken, try being more original!</p>';
            } else if ($_GET['signup'] == "success") {
                echo '<p class="success">Sign Up successfull!</p>';
            }
        }
        ?>
        <form action="includes/signup.inc.php" method="post" class="login-form">
            <h2 class="login-title">Sign Up</h2>

            <label for="username" class="login-label">Username:</label>
            <input type="text" id="username" name="username" class="login-input">

            <label for="password" class="login-label">Password:</label>
            <input type="password" id="password" name="password" class="login-input">
            <span class="show-password">show</span>

            <label for="confirm_password" class="login-label">Confirm Password:</label>
            <input type="password" id="confirm_password" name="passwordRepeat" class="login-input">
            <span class="show-password">show</span>

            <!-- Hidden fields to pass data to response.php -->
            <input type="hidden" name="redirect" value="login">
            <input type="hidden" name="message" value="Login successful!">

            <button type="submit" name=signup-submit class="login-button">Sign up</button>
        </form>

        <p class="signup-link">Already have an account? <a href="login.php">Login now</a>.</p>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>