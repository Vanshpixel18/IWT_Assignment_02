<?php
session_start();

// Authentication Guard: redirect to login if session is not active
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Gyanganga Institute of Technology and Sciences - Student Portal</title>
</head>

<!-- Outer Frameset: Top row 140px for banner, remaining height for main layout -->
<frameset rows="140,*" frameborder="1" border="3" bordercolor="#D4AF37">
    <frame src="banner.php" name="banner" scrolling="no" noresize="noresize" title="Header Banner">
    
    <!-- Inner Frameset: Left 200px for nav, remaining width for main content -->
    <frameset cols="200,*" frameborder="1" border="3" bordercolor="#D4AF37">
        <frame src="nav.php" name="nav" scrolling="auto" title="Navigation Panel">
        <frame src="home.php" name="main" scrolling="auto" title="Main Content Window">
    </frameset>

    <!-- Fallback for legacy or unsupported browsers -->
    <noframes>
        <body>
            <h2>Browser Not Compatible with Frames</h2>
            <p>Your browser does not support HTML framesets. Please use a browser supporting HTML frames to view this website properly.</p>
            <p><a href="home.php">Click here to access the content directly</a></p>
        </body>
    </noframes>
</frameset>
</html>
