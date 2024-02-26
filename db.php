<?php

$host = 'localhost'; // Replace with your actual database host
$db = 'users'; // Replace with your actual database name
$user = 'root'; // Replace with your actual database user
$pass = ''; // Replace with your actual database password

// Create a PDO connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
