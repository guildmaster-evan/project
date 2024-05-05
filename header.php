<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <header>
        <a href="index.php"><img src="logo4.png" alt="Guild Coffee Logo"></a>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="store.php">Store</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
            <ul>
                <?php if (isset($_SESSION['userID'])) : ?>
                    <div class="session_welcome">
                        <li>
                            <?php
                            if (isset($_SESSION['userID'])) {
                                $username = $_SESSION['userName'];
                                echo '<a href="response.php">Welcome, ', $username, '!</a>';
                            }
                            ?>
                        </li>
                        <li>
                            <form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit" style="color: var(--ivory); text-decoration: none; border: none; background: none; cursor: pointer; font-size: inherit;">Logout</button>
                            </form>
                        </li>
                        </li>
                    </div>
                <?php else : ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <div class="custom-cursor"></div>
    <script>
        // JavaScript to track mouse movement and update custom cursor position
        document.addEventListener('mousemove', function(e) {
            var cursor = document.querySelector('.custom-cursor');
            cursor.style.top = e.clientY + 'px';
            cursor.style.left = e.clientX + 'px';
        });
    </script>