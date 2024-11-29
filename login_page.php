<?php
session_start();
require 'db.php'; // Make sure db.php is included

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username === 'admin' && $password === 'password123') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login_style.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="login_page.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Login</button>
        </form>
        <a href="forgot_password.php" class="forgot-password">Forgot your password?</a> <!-- Forgot password link -->
    </div>
</body>
</html>
