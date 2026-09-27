<?php
session_start();
require_once 'counter.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$username = htmlspecialchars($_SESSION['username']);
$visit_number = isset($_SESSION['visit_number']) ? $_SESSION['visit_number'] : get_counter();
$total_visitors = get_counter();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GITS Banner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="banner-body">

    <div class="banner-logo-container">
        <!-- Logo Image with Client-Side Image Map -->
        <img src="logo.png" alt="Gyanganga Institute Logo" usemap="#logomap" class="banner-logo">
        
        <!-- Image Map Definition with exactly 2 hotspots -->
        <map name="logomap">
            <area shape="circle" coords="50,50,35" href="home.php" target="main" alt="Home Page" title="Click Circle shape to open Home Page">
            <area shape="rect" coords="100,20,200,80" href="about.php" target="main" alt="About Us Page" title="Click Rectangle shape to open About Us Page">
        </map>
    </div>

    <!-- User Information & Visitor Statistics Panel -->
    <div class="banner-user-info">
        <div class="banner-welcome">
            Welcome, <span><?php echo $username; ?></span>!
        </div>
        <div class="banner-stats">
            Your Visit #: <span>#<?php echo $visit_number; ?></span> | Total Visitors: <span><?php echo $total_visitors; ?></span>
        </div>
        <div>
            <a href="logout.php" target="_top" class="logout-btn">Logout</a>
        </div>
    </div>

</body>
</html>
