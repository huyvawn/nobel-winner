<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Contact Us"; ?></title>
    <link rel="stylesheet" href="indexstyle.css">
    <link rel="stylesheet" href="indexstyle2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="contactus.css?v=<?php echo time(); ?>">
    <!-- Thêm Slick CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">

<!-- Thêm jQuery (bắt buộc cho Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Thêm Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
</head>
<body>
<?php include 'header.php'; ?>
    
    <div class="contact-container">
        <h1>Contact Us</h1>
        <p>If you have any questions, feel free to reach out to us through the form below.</p>
        
        <form action="submit_contact.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit">Send Message</button>
        </form>

        <div class="contact-info">
            <h2>Our Contact Information</h2>
            <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Hanoi, Viet Nam</p>
            <p><i class="fas fa-phone"></i> +84 123 456 789</p>
            <p><i class="fas fa-envelope"></i> info@example.com</p>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
</body>
</html>