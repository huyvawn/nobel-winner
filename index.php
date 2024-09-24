<?php

$pageTitle = "Trang chủ - Nobel Prize";


include 'header.php';
?>

<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <!-- Thêm Bootstrap CSS từ CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- File CSS tùy chỉnh của bạn -->

    <link rel="stylesheet" href="indexstyle.css">
    <link rel="stylesheet" href="indexstyle2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Thêm Slick CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">

<!-- Thêm jQuery (bắt buộc cho Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Thêm Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
function animateNumbers() {
    const numbers = document.querySelectorAll('.number');
    numbers.forEach(number => {
        const target = +number.getAttribute('data-target');
        const speed = 25; // Tốc độ chạy số (càng nhỏ thì càng nhanh)

        const updateNumber = () => {
            const current = +number.innerText;
            const increment = target / speed;

            if (current < target) {
                number.innerText = Math.ceil(current + increment);
                setTimeout(updateNumber, 50); // Thời gian giữa mỗi lần cập nhật
            } else {
                number.innerText = target;
            }
        };
        updateNumber();
    });
}

// Gọi hàm khi trang được tải
window.onload = animateNumbers;
window.onload = function() {
    $('.nobel-carousel').slick({
        infinite: true,            // Vòng lặp
        slidesToShow: 3,           // Hiển thị 3 người trên một lần
        slidesToScroll: 1,         // Mỗi lần cuộn 1 người
        autoplay: true,            // Tự động chạy
        autoplaySpeed: 1000,       // Thời gian giữa các lần cuộn (2000ms = 2 giây)
        arrows: true,              // Hiển thị mũi tên điều hướng
        rtl: true,                 // Cuộn từ phải sang trái
        responsive: [
            {
                breakpoint: 768,   // Trên màn hình nhỏ hơn 768px, chỉ hiển thị 2 người
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,   // Trên màn hình nhỏ hơn 480px, chỉ hiển thị 1 người
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
};

</script>
<banner>
    <div class="background-div">
    <a href="#" class="link-overlay">THE NOBEL PRIZE ANNOUNCEMENTS 7-14 OCTOBER2024</a>
    </div>
    <div class="divider"></div>
    <div><p class="text">Six days, six prizes</p></div>
    <div class="background-banner">
    <a href="#" class="banner-link">2024 Nobel Prize announcements
    <p class="text-banner">On 7-14 October, the 2024 Nobel Prizes will be revealed. All of the announcements will be streamed live here at nobelprize.org</p>
    <p style="color:orange; font-family: 'Arial', sans-serif; font-size: medium;" >See the full fill of announcements dates</p>
    </a>
    
    </div>

    <div>
        <p class="text">Spotlight on: the Nobel Prize in Chemistry</p>
    </div>
</banner>
<container>
    <div class="number-container">
    <div class="column">
        <span class="number" data-target="115">00</span>
        <p class= "number-label">chemistry prizes have been awarded</p>
    </div>
    <div class="divider-vertical"></div>
    <div class="column">
        <span class="number" data-target="97">00</span>
        <p class= "number-label">years old: the oldest chemistry laureate</p>
    </div>
    <div class="divider-vertical"></div>
    <div class="column">
        <span class="number" data-target="35">00</span>
        <p class= "number-label">years old: the youngest chemistry laureate</p>
    </div>
</div>
<div class="divider"></div>
<div>
    <span><p class="text2">“The said interest shall be divided into five equal parts, which shall be apportioned as follows: /- – -/ one part to the person who shall have made the most important chemical discovery or improvement…” </p></span>
</div>
<div class="background-content">
    <div class="content-container">
        <div class="left-column">
            <iframe 
                width="500" 
                height="300" 
                src="https://www.youtube.com/watch?v=1RvRqte8UkM" 
                frameborder="0" 
                allowfullscreen>
            </iframe>
        </div>
        <div class="right-column">
            <p class="subtitle" >One-minute crash course</p>
            <p class="title">Quantum dots explained </p>
            <p style="color:black; font-family: 'Arial', sans-serif; font-size: medium;">Learn more about the strange and tiny particles whose existence led to last year’s Nobel Prize in Chemistry.</p>
        </div>
        
    </div>
    <div class="content-container">
    <div class="text-content">
        <a href="#" class="text-link">Link bất kì một cái content gì ở đây</a>
        <p class="text-container">The discovery of the 2019 chemistry laureates has had a huge everyday impact for us. But what did they discover?</p>
    </div>
    <div class="image-content">
        <img src="images/content.jpg" alt="Mô tả hình ảnh" style="width: 70%; height: auto;">
    </div>
</div>
</div>
</container>
<main>
      <div class="divider"></div>
      <div><p class="text">Featured chemistry laureates</p></div>
      <div class="divider"></div>
      <div class="featured-laureates">
    <div class="laureate-row">
        <div class="laureate-item">
            <img src="images/mariecurie.jpg" alt="Laureate 1" class="laureate-image">
            <div class="laureate-info">
                <h3>Marie Curie, née Skłodowska</h3>
                <p>in recognition of her services to the advancement of chemistry by the discovery of the elements radium and polonium, by the isolation of radium and the study of the nature and compounds of this remarkable element.</p>
            </div>
        </div>
        <div class="laureate-item">
            <img src="images/sauvage.jpg" alt="Laureate 2" class="laureate-image">
            <div class="laureate-info">
                <h3>Jean-Pierre Sauvage</h3>
                <p>for the design and synthesis of molecular machines.</p>
            </div>
        </div>
    </div>
    
    <div class="laureate-row">
        <div class="laureate-item">
            <img src="images/arnold.jpg" alt="Laureate 3" class="laureate-image">
            <div class="laureate-info">
                <h3>Frances H. Arnold</h3>
                <p>for the directed evolution of enzymes.</p>
            </div>
        </div>
        <div class="laureate-item">
            <img src="images/shechtman.jpg" alt="Laureate 4" class="laureate-image">
            <div class="laureate-info">
                <h3>Dan Shechtman</h3>
                <p>for the discovery of quasicrystals.</p>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
<div><p class="text">2023 Nobel Prize laureates</p></div>
<div id="laureatesCarousel" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/mariecurie.jpg" class="d-block w-100" alt="Laureate 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Laureate 1</h5>
        <p>Description of Laureate 1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/sauvage.jpg" class="d-block w-100" alt="Laureate 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Laureate 2</h5>
        <p>Description of Laureate 2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/arnold.jpg" class="d-block w-100" alt="Laureate 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Laureate 2</h5>
        <p>Description of Laureate 3</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/shechtman.jpg" class="d-block w-100" alt="Laureate 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Laureate 2</h5>
        <p>Description of Laureate 4</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mariecurie.jpg" class="d-block w-100" alt="Laureate 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Laureate 2</h5>
        <p>Description of Laureate 5</p>
      </div>
    </div>
    
  </div>

  <!-- Các nút điều khiển -->
  <a class="carousel-control-prev" href="#laureatesCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#laureatesCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</main>

</body>
</html>



