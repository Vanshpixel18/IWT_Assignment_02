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
    <title>About Us - Gyanganga Institute of Technology and Sciences</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="page-container">
        <header>
            <h1>About Gyanganga Institute of Technology &amp; Sciences</h1>
        </header>

        <main>
            <section class="content-card">
                <h2>Our Vision &amp; Mission</h2>
                
                <h3>Vision</h3>
                <p>
                    To emerge as a world-class center of technical education and research that produces competent, ethical, 
                    and socially responsible engineering professionals and leaders.
                </p>

                <h3>Mission</h3>
                <ul class="facility-list" style="margin-top: 10px;">
                    <li>To impart quality education using modern teaching methodologies and interactive learning tools.</li>
                    <li>To foster a culture of research, innovation, entrepreneurship, and continuous self-improvement.</li>
                    <li>To bridge the industry-academia gap through strategic corporate collaborations and internships.</li>
                    <li>To instill ethical values, leadership qualities, and environmental consciousness in young minds.</li>
                </ul>
            </section>

            <section class="content-card">
                <h2>Affiliation &amp; Accreditation</h2>
                <p>
                    Gyanganga Institute of Technology &amp; Sciences is managed by the Gyan Ganga Educational Academy Society. 
                    The institution is recognized globally for its educational rigor and holds the following credentials:
                </p>
                <ul style="margin-left: 20px; line-height: 1.8;">
                    <li><strong>AICTE Approval:</strong> Approved by All India Council for Technical Education, Ministry of HRD, Govt. of India.</li>
                    <li><strong>University Affiliation:</strong> Affiliated to Rajiv Gandhi Proudyogiki Vishwavidyalaya (RGPV), Bhopal for B.Tech &amp; M.Tech.</li>
                    <li><strong>Management &amp; Computer Applications:</strong> Affiliated to Rani Durgavati Vishwavidyalaya (RDVV), Jabalpur for MBA &amp; MCA.</li>
                    <li><strong>ISO Certification:</strong> Certified ISO 9001:2015 for Quality Management Systems.</li>
                </ul>
            </section>

            <section class="content-card">
                <h2>Campus Infrastructure &amp; Location</h2>
                <p>
                    Situated on the Jabalpur-Bhedaghat Road, GITS enjoys a serene and peaceful setting conducive to academic pursuits. 
                    The green campus features state-of-the-art computer centers, high-speed Wi-Fi, specialized domain laboratories, 
                    a central library with digital repository access, and sports arenas for overall personality development.
                </p>
            </section>
        </main>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Gyanganga Institute of Technology &amp; Sciences (GITS), Jabalpur. All Rights Reserved.</p>
        </footer>
    </div>

</body>
</html>
