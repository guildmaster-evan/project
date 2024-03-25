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
        <form action="response.php" method="post" class="login-form">
            <h2 class="login-title">Sign in</h2>

            <label for="username" class="login-label">Email or Phone:</label>
            <input type="text" id="username" name="username" required class="login-input">

            <label for="password" class="login-label">Password:</label>
            <input type="password" id="password" name="password" required class="login-input">
            <span class="show-password">show</span>

            <!-- Hidden fields to pass data to response.php -->
            <input type="hidden" name="redirect" value="login">
            <input type="hidden" name="message" value="Login successful!">

            <button type="submit" class="login-button">Sign in</button>
            <p class="forgot-password"><a href="#">Forgot password?</a></p>
        </form>

        <p class="signup-link">Don't have an account? <a href="signup.php">Sign Up now</a>.</p>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>