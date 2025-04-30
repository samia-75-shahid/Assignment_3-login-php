<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In a real app, you would save to database
    $_SESSION['message'] = "Registration successful! Please login.";
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4" style="width: 350px;">
        <h2 class="text-center mb-4">Register</h2>
        
        <form method="POST">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
        
        <div class="mt-3 text-center">
            <a href="login.php">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>