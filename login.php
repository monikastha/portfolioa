<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css"> 
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <div id="error-message" style="color: red;"></div>
        <form id="login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <a href="index.php">Go to Home</a>
        </form>
    </div>
    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            if (username === 'admin' && password === 'admin') {
                alert('Login successful!');
                window.location.href = 'dashboard.php';
            } else {
                alert('Invalid username or password. Please try again.');
            }
        });
    </script>
</body>
</html>