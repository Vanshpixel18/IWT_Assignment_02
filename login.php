<?php
session_start();
require_once 'counter.php';

// If user is already logged in, redirect straight to frameset.php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: frameset.php");
    exit;
}

$error_message = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Hardcoded credentials check
    if ($username === 'student' && $password === 'gits123') {
        // Successful login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Increment visitor counter ONLY ONCE during login session
        $visit_number = increment_counter();
        $_SESSION['visit_number'] = $visit_number;
        
        // Redirect to frameset dashboard
        header("Location: frameset.php");
        exit;
    } else {
        // Failed login
        $error_message = 'Invalid username or password. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gyanganga Institute of Technology and Sciences</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">

    <main class="login-card">
        <header class="login-header">
            <h1>Gyanganga Institute</h1>
            <p>of Technology &amp; Sciences (GITS)</p>
            <p style="margin-top: 8px; font-size: 0.95rem; font-weight: bold; color: var(--dark-gold);">Student &amp; Faculty Portal Login</p>
        </header>

        <?php if (!empty($error_message)): ?>
            <div class="alert-error" role="alert">
                <strong>Login Failed:</strong> <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn-primary">Sign In to Dashboard</button>
        </form>

        <div class="demo-credentials">
            <strong>Demo Credentials:</strong><br>
            Username: <code>student</code> | Password: <code>gits123</code>
        </div>
    </main>

</body>
</html>
