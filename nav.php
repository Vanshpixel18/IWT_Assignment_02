<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GITS Navigation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="nav-body">

    <div class="nav-title">Main Menu</div>

    <nav role="navigation">
        <ul>
            <li><a href="home.php" target="main">Home</a></li>
            <li><a href="about.php" target="main">About Us</a></li>
            <li><a href="academics.php" target="main">Academics</a></li>
            <li><a href="facilities.php" target="main">Facilities</a></li>
            <li><a href="contact.php" target="main">Contact</a></li>
        </ul>
    </nav>

</body>
</html>
