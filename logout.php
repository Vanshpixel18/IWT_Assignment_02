<?php
/**
 * Logout script for Gyanganga Institute of Technology and Sciences
 * Destroys session and redirects user to login.php
 */
session_start();

// Unset all session variables
$_SESSION = array();

// If session cookies are used, clear the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), 
        '', 
        time() - 42000,
        $params["path"], 
        $params["domain"],
        $params["secure"], 
        $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect back to login.php
header("Location: login.php");
exit;
?>
