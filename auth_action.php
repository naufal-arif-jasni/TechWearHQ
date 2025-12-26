<?php
session_start();

// Initialize a "mock database" for users in the session if it doesn't exist
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        ['username' => 'admin', 'password' => 'password123']
    ];
}

$action = $_GET['action'] ?? '';

// REGISTRATION LOGIC
if ($action == 'register') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Add to our session "database"
    $_SESSION['users'][] = ['username' => $user, 'password' => $pass];
    header("Location: index.php?msg=Account created! Please login.");
    exit;
}

// LOGIN LOGIC
if ($action == 'login') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    foreach ($_SESSION['users'] as $stored_user) {
        if ($stored_user['username'] === $user && $stored_user['password'] === $pass) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user;
            header("Location: dashboard.php");
            exit;
        }
    }
    header("Location: index.php?error=Invalid credentials");
    exit;
}