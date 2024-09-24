<?php
$pageTitle = "Footer";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Thêm Bootstrap CSS từ CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- File CSS tùy chỉnh của bạn -->
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    <footer>
    <div><p class="text">About the Nobel Prize organisation</p></div>
    <div class="divider"></div>
    <div class="container">
            <div class="row text-center">
                <div class="col-md-4 footer-column">
                    <h5>The Nobel Foundation</h5>
                    <p>Tasked with a mission to manage Alfred Nobel's fortune and has ultimate responsibility for fulfilling the intentions of Nobel's will.</p>
                </div>
                <div class="col-md-4 footer-column">
                    <h5>The prize-awarding institutions</h5>
                    <p>For more than a century, these academic institutions have worked independently to select Nobel Prize laureates.</p>
                </div>
                <div class="col-md-4 footer-column">
                    <h5>Outreach organisations</h5>
                    <p>Several outreach organisations and activities have been developed to inspire generations and disseminate knowledge about the Nobel Prize.</p>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="container">
    <div class="row text-center">
        <div class="col-md-3">
            <h6 class="abc">Press</h6>
            <h6 class="abc">Contact</h6>
            <h6 class="abc">FAQ</h6>
        </div>
        <div class="col-md-3">
            <h6 class="abc">Privacy policy</h6>
            <h6 class="abc">Technical support</h6>
            <h6 class="abc">Terms of use</h6>
        </div>
        <div class="col-md-3">
            <h6 class="abc">For developers</h6>
            <h6 class="abc">Media player</h6>
        </div>
        <div class="col-md-3">
            <h6 class="abc">Join us</h6>
            <div class="social-icons">
                <a href="https://www.nobelprize.org/" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.nobelprize.org/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.nobelprize.org/" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.nobelprize.org/" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</div>

</footer>
</body>
</html>