<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="login_style.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="forgot-password-container">
        <h2>Forgot Password</h2>
        <form action="send_reset_link.php" method="POST">
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <button type="submit">Send Reset Link</button>
        </form>
        <a href="login_page.php" class="back-to-login">Back to Login</a>
    </div>
</body>
</html>
