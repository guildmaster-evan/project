<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="login-page-container">
        <form action="includes\signup.inc.php" method="post" class="login-form">
            <h2 class="login-title">Sign up</h2>

            <label for="username" class="login-label">Email or Phone:</label>
            <input type="text" id="username" name="username" required class="login-input">

            <label for="password" class="login-label">Password:</label>
            <input type="password" id="password" name="password" required class="login-input">
            <span class="show-password">show</span>

            <label for="confirm_password" class="login-label">Confirm Password:</label>
            <input type="password" id="confirm_password" name="passwordRepeat" required class="login-input">
            <span class="show-password">show</span>

            <!-- Hidden fields to pass data to response.php -->
            <input type="hidden" name="redirect" value="login">
            <input type="hidden" name="message" value="Login successful!">

            <button type="submit" class="login-button">Sign in</button>
        </form>

        <p class="signup-link">Already have an account? <a href="login.php">Join now</a>.</p>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>