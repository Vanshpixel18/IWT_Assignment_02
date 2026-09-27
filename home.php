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
    <title>Home - Gyanganga Institute of Technology and Sciences</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="page-container">
        <header>
            <h1>Welcome to Gyanganga Institute of Technology &amp; Sciences</h1>
        </header>

        <main>
            <section class="content-card">
                <h2>Empowering Minds, Shaping Tomorrow</h2>
                <p>
                    <strong>Gyanganga Institute of Technology &amp; Sciences (GITS)</strong>, Jabalpur, established in 2003, 
                    is one of central India's premier technical institutions. Approved by AICTE, New Delhi, and affiliated to 
                    Rajiv Gandhi Proudyogiki Vishwavidyalaya (RGPV), Bhopal, GITS stands as a beacon of academic excellence, 
                    cutting-edge research, and holistic career development.
                </p>
                <p>
                    Spanning over 30 acres of lush green campus, the institute offers a vibrant learning environment equipped 
                    with state-of-the-art laboratories, modern smart classrooms, and extensive industry partnerships to prepare 
                    students for global engineering and technological challenges.
                </p>
            </section>

            <section class="content-card">
                <h2>Key Highlights of GITS</h2>
                <div class="facility-grid">
                    <div class="facility-card">
                        <h3>AICTE &amp; NBA Approved</h3>
                        <p>High standards of technical education with NBA accredited undergraduate branches and top academic ratings.</p>
                    </div>
                    <div class="facility-card">
                        <h3>90%+ Placement Record</h3>
                        <p>Consistent record of placements in Fortune 500 companies including TCS, Infosys, Wipro, Cognizant, and IBM.</p>
                    </div>
                    <div class="facility-card">
                        <h3>Research &amp; Innovation</h3>
                        <p>Active incubation centers, IEEE student branch, robotic labs, and government-funded R&amp;D projects.</p>
                    </div>
                </div>
            </section>

            <section class="content-card">
                <h2>Director's Message</h2>
                <blockquote style="border-left: 4px solid var(--primary-gold); padding-left: 15px; font-style: italic; color: var(--text-dark); background: var(--bg-cream-soft); padding: 15px; border-radius: 4px;">
                    "At Gyanganga, our core objective is not merely imparting academic curriculum, but nurturing innovation, ethics, 
                    and leadership qualities. We empower our students to become solution providers for society's technological needs."
                </blockquote>
            </section>
        </main>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Gyanganga Institute of Technology &amp; Sciences (GITS), Jabalpur. All Rights Reserved.</p>
        </footer>
    </div>

</body>
</html>
