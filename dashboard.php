<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-primary">
        <div class="container">
            <span class="navbar-brand text-white">Simple Auth</span>
            <a href="logout.php" class="btn btn-light">Logout</a>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="alert alert-success">
            Welcome! You are logged in as <?= $_SESSION['user'] ?>
        </div>
    </div>
</body>
</html>