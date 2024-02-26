<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Add password hashing logic here (use password_hash())
    // Add user registration logic and insert into the 'users' table

    // Redirect to response.php
    header("Location: response.php");
    exit();
}
