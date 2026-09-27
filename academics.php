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
    <title>Academics - Gyanganga Institute of Technology and Sciences</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="page-container">
        <header>
            <h1>Academic Programs Offered</h1>
        </header>

        <main>
            <section class="content-card">
                <h2>Undergraduate &amp; Postgraduate Degree Courses</h2>
                <p>
                    Gyanganga Institute of Technology &amp; Sciences offers a wide spectrum of undergraduate (B.Tech) and 
                    postgraduate (M.Tech, MCA, MBA) degree programs designed to fulfill global industrial requirements.
                </p>

                <!-- Academic Table Requirement -->
                <table class="academic-table" summary="List of Courses and Branches offered at GITS Jabalpur">
                    <thead>
                        <tr>
                            <th>Program Code</th>
                            <th>Degree Level</th>
                            <th>Course / Specialization Branch</th>
                            <th>Duration</th>
                            <th>Intake Seats</th>
                            <th>Eligibility Criteria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>BT-CSE</strong></td>
                            <td>B.Tech</td>
                            <td>Computer Science &amp; Engineering</td>
                            <td>4 Years (8 Semesters)</td>
                            <td>180</td>
                            <td>10+2 with Physics &amp; Mathematics (JEE Main)</td>
                        </tr>
                        <tr>
                            <td><strong>BT-AIDS</strong></td>
                            <td>B.Tech</td>
                            <td>Artificial Intelligence &amp; Data Science</td>
                            <td>4 Years (8 Semesters)</td>
                            <td>120</td>
                            <td>10+2 with Physics &amp; Mathematics (JEE Main)</td>
                        </tr>
                        <tr>
                            <td><strong>BT-ECE</strong></td>
                            <td>B.Tech</td>
                            <td>Electronics &amp; Communication Engineering</td>
                            <td>4 Years (8 Semesters)</td>
                            <td>120</td>
                            <td>10+2 with Physics &amp; Mathematics (JEE Main)</td>
                        </tr>
                        <tr>
                            <td><strong>BT-ME</strong></td>
                            <td>B.Tech</td>
                            <td>Mechanical Engineering</td>
                            <td>4 Years (8 Semesters)</td>
                            <td>60</td>
                            <td>10+2 with Physics &amp; Mathematics (JEE Main)</td>
                        </tr>
                        <tr>
                            <td><strong>BT-CE</strong></td>
                            <td>B.Tech</td>
                            <td>Civil Engineering</td>
                            <td>4 Years (8 Semesters)</td>
                            <td>60</td>
                            <td>10+2 with Physics &amp; Mathematics (JEE Main)</td>
                        </tr>
                        <tr>
                            <td><strong>MT-CSE</strong></td>
                            <td>M.Tech</td>
                            <td>Computer Science &amp; Engineering</td>
                            <td>2 Years (4 Semesters)</td>
                            <td>18</td>
                            <td>B.E. / B.Tech in CSE/IT (GATE Qualified)</td>
                        </tr>
                        <tr>
                            <td><strong>MT-DC</strong></td>
                            <td>M.Tech</td>
                            <td>Digital Communication</td>
                            <td>2 Years (4 Semesters)</td>
                            <td>18</td>
                            <td>B.E. / B.Tech in ECE/EI (GATE Qualified)</td>
                        </tr>
                        <tr>
                            <td><strong>PG-MCA</strong></td>
                            <td>MCA</td>
                            <td>Master of Computer Applications</td>
                            <td>2 Years (4 Semesters)</td>
                            <td>60</td>
                            <td>Bachelor's Degree in BCA/B.Sc/B.Com with Math</td>
                        </tr>
                        <tr>
                            <td><strong>PG-MBA</strong></td>
                            <td>MBA</td>
                            <td>Master of Business Administration</td>
                            <td>2 Years (4 Semesters)</td>
                            <td>60</td>
                            <td>Bachelor's Degree in any discipline (CMAT)</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="content-card">
                <h2>Admission &amp; Evaluation System</h2>
                <p>
                    Admissions are conducted transparently based on merit via the Directorate of Technical Education (DTE), 
                    Govt. of Madhya Pradesh counseling process. Continuous evaluation includes mid-semester exams, laboratory 
                    practicals, major projects, and end-semester university examinations administered by RGPV / RDVV.
                </p>
            </section>
        </main>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Gyanganga Institute of Technology &amp; Sciences (GITS), Jabalpur. All Rights Reserved.</p>
        </footer>
    </div>

</body>
</html>
