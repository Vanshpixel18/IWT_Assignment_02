<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$submission_success = false;
$submitted_name = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submitted_name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : 'Visitor';
    $submission_success = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Gyanganga Institute of Technology and Sciences</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="page-container">
        <header>
            <h1>Contact Us &amp; Admissions Inquiry</h1>
        </header>

        <main>
            <section class="content-card">
                <?php if ($submission_success): ?>
                    <div class="alert-success">
                        <strong>Message Sent Successfully!</strong><br>
                        Thank you, <strong><?php echo $submitted_name; ?></strong>. Your inquiry has been logged with our admissions desk. Our team will contact you shortly via email/phone.
                    </div>
                <?php endif; ?>

                <div class="contact-container">
                    <!-- Contact Details -->
                    <div class="contact-info">
                        <h2>Campus Address</h2>
                        
                        <div class="contact-info-item">
                            <strong>Gyanganga Institute of Technology &amp; Sciences</strong>
                            <p style="margin-bottom: 0;">
                                Near Tilwara Ghat, Bargi Hills,<br>
                                Jabalpur, Madhya Pradesh – 482003, India
                            </p>
                        </div>

                        <div class="contact-info-item">
                            <strong>Admission Helpline</strong>
                            <p style="margin-bottom: 0;">
                                Phone: +91-761-2671551, +91-761-2671552<br>
                                Toll-Free: 1800-233-4487
                            </p>
                        </div>

                        <div class="contact-info-item">
                            <strong>Email Inquiries</strong>
                            <p style="margin-bottom: 0;">
                                General: info@gits.ac.in<br>
                                Admissions: admissions@gits.ac.in
                            </p>
                        </div>

                        <div class="contact-info-item">
                            <strong>Office Working Hours</strong>
                            <p style="margin-bottom: 0;">
                                Monday – Saturday: 9:00 AM – 5:00 PM<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div>
                        <h2>Send Us a Message</h2>
                        <form action="contact.php" method="POST">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Contact Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter 10-digit mobile number">
                            </div>

                            <div class="form-group">
                                <label for="subject">Inquiry Subject *</label>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="e.g. Admission Inquiry B.Tech CSE" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Your Message / Query *</label>
                                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Write your message details here..." required></textarea>
                            </div>

                            <button type="submit" class="btn-primary">Submit Inquiry</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Gyanganga Institute of Technology &amp; Sciences (GITS), Jabalpur. All Rights Reserved.</p>
        </footer>
    </div>

</body>
</html>
