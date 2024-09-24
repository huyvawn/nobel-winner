<?php
$pageTitle = "Header";
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <!-- Thêm Bootstrap CSS từ CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- File CSS tùy chỉnh của bạn -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

<!-- Bắt đầu phần header -->
<header class="bg-white text-white text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="header-title">THE NOBEL PRIZE</h1>
                <!-- Thanh đường kẻ ngang -->
                <hr class="header-divider">
            </div>
        </div>
    </div>
</header>

<!-- Thanh điều hướng (Navbar) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-black" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Nobel Prizes & laureates
                    </a>
                    <ul class="sub-menu" role="menu" aria-hidden="false">
                        <li class="menu-item"><a href="#">All Nobel Prizes</a></li>
                        <li class="menu-item"><a href="#">Nobel Prizes 2023</a></li>
                        <li class="menu-item"><a href="#">Physics prize</a></li>
                        <li class="menu-item"><a href="#">Chemistry prize</a></li>
                        <li class="menu-item"><a href="#">Medicine prize</a></li>
                        <li class="menu-item"><a href="#">Literature prize</a></li>
                        <li class="menu-item"><a href="#">Peace prize</a></li>
                        <li class="menu-item"><a href="#">Prize in economic sciences</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-black" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <ul class="sub-menu" role="menu" aria-hidden="false">
                        <li class="menu-item"><a href="#">About The Prize</a></li>
                        <li class="menu-item"><a href="#">Alfred Nobel</a></li>
                        <li class="menu-item"><a href="#">Award ceremonies</a></li>
                        <li class="menu-item"><a href="#">Nomination</a></li>
                        <li class="menu-item"><a href="#">Oraganisation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="contact.php">Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="contact.php">Educational</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="contact.php">Events & museums</a>
                </li>
            </ul>
             <!-- Thanh công cụ tìm kiếm -->
            <form class="form-inline ml-auto" action="#" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i> <!-- Biểu tượng kính lúp -->
                </button>
            </form>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
