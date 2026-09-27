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
    <title>Facilities - Gyanganga Institute of Technology and Sciences</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="page-container">
        <header>
            <h1>Campus Facilities &amp; Resources</h1>
        </header>

        <main>
            <section class="content-card">
                <h2>World-Class Infrastructure at GITS</h2>
                <p>
                    Gyanganga Institute of Technology &amp; Sciences provides a holistic campus environment fostering academic 
                    excellence, innovation, fitness, and recreation.
                </p>

                <!-- Facilities Unordered List Requirement -->
                <ul class="facility-list">
                    <li>
                        <strong>Central Library &amp; Digital Knowledge Center:</strong> 
                        Houses over 50,000 volumes, international journals, IEEE Xplore digital subscription, NPTEL video lectures, 
                        and a 200-seater quiet reading hall.
                    </li>
                    <li>
                        <strong>High-Performance Computer Labs:</strong> 
                        Equipped with over 800 high-end desktop workstations, high-speed 1 Gbps dedicated fiber internet, NVIDIA GPU AI clusters, 
                        and specialized cloud computing labs.
                    </li>
                    <li>
                        <strong>Advanced Engineering Laboratories:</strong> 
                        State-of-the-art labs for Robotics, VLSI Design, CNC Machining, Concrete Testing, Embedded Systems, and Internet of Things (IoT).
                    </li>
                    <li>
                        <strong>Innovation &amp; Incubation Cell (TBI):</strong> 
                        Dedicated startup incubator offering seed funding, mentorship, patent filing support, and co-working space for student entrepreneurs.
                    </li>
                    <li>
                        <strong>Modern Student Hostels:</strong> 
                        Separate fully-furnished residential hostels for boys and girls with 24/7 security, Wi-Fi coverage, solar hot water, and recreation rooms.
                    </li>
                    <li>
                        <strong>Multi-Cuisine Cafeteria &amp; Food Court:</strong> 
                        Hygienic food court offering nutritious vegetarian meals, snacks, fresh juices, and coffee bar options for students and staff.
                    </li>
                    <li>
                        <strong>Sports Complex &amp; Gymnasium:</strong> 
                        Includes a full-size cricket ground, football turf, basketball court, volleyball court, badminton hall, table tennis, and a modern gym.
                    </li>
                    <li>
                        <strong>Grand Auditorium &amp; Seminar Halls:</strong> 
                        A 1000-seater air-conditioned central auditorium and multiple seminar halls equipped with modern audio-visual technology for conferences and cultural events.
                    </li>
                    <li>
                        <strong>Campus Healthcare Center:</strong> 
                        On-campus medical clinic with a resident medical officer, first-aid facilities, and dedicated 24/7 emergency ambulance service.
                    </li>
                    <li>
                        <strong>Fleet Transport Network:</strong> 
                        A fleet of over 40 modern buses connecting all major residential areas of Jabalpur city and surrounding regions with campus.
                    </li>
                </ul>
            </section>
        </main>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Gyanganga Institute of Technology &amp; Sciences (GITS), Jabalpur. All Rights Reserved.</p>
        </footer>
    </div>

</body>
</html>
