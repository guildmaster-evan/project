<?php
// Connect to MySQL (replace with your connection details)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "user_authentication";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process user registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Generate a unique salt for each user
    $salt = bin2hex(random_bytes(25));

    // Hash the password with the salt
    $hashed_password = hash('sha256', $password . $salt);

    // Store the user in the database
    $sql = "INSERT INTO users (username, password_hash, salt) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $hashed_password, $salt);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
