<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechWear HQ Performance Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar a { color: #adb5bd; text-decoration: none; padding: 10px 20px; display: block; }
        .sidebar a:hover, .sidebar a.active { background: #343a40; color: white; border-left: 4px solid #0d6efd; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Navigation Menu -->
        <nav class="col-md-2 d-none d-md-block sidebar px-0">
            <div class="p-3 text-center">
                <h4>TechWear HQ</h4>
                <small class="text-primary">Admin Panel</small>
            </div>
            <div class="mt-4">
                <a href="dashboard.php" class="<?= $current_page == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a>
                <a href="products.php" class="<?= $current_page == 'products.php' ? 'active' : '' ?>">Products</a>
                <a href="orders.php" class="<?= $current_page == 'orders.php' ? 'active' : '' ?>">Orders</a>
                <a href="customers.php" class="<?= $current_page == 'customers.php' ? 'active' : '' ?>">Customers</a>
                <a href="inventory.php" class="<?= $current_page == 'inventory.php' ? 'active' : '' ?>">Inventory</a>
                <a href="vendors.php" class="<?= $current_page == 'vendors.php' ? 'active' : '' ?>">Vendors</a>
                <hr>
                <a href="logout.php" class="text-danger">Logout</a>
            </div>
        </nav>
        <main class="col-md-10 ms-sm-auto px-md-4 py-4">