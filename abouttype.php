<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "About"; ?></title>
    <link rel="stylesheet" href="indexstyle.css">
    <link rel="stylesheet" href="indexstyle2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
    <!-- Thêm Slick CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">

<!-- Thêm jQuery (bắt buộc cho Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Thêm Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<div class="divider"></div>
<div>
    <H1 class="title-about">A work of art in the form of a diploma</H1>
    <div class="divider50"></div>
    <div><p class="title-about-p">Each Nobel Prize diploma is a unique work of art where the design is decided by the prize-awarding bodies. The literature diploma is written on parchment, i.e. specially treated leather, using largely the same technique as those of medieval book illustrators. The diplomas given to the other laureates are produced on specially ordered handmade paper.</p></div>
    <div class="divider50"></div>
    <div class="divider50"></div>
</div>
<div class="custom-carousel-container">
    <p class="custom-carousel-title">All Nobel Prize diplomas 2023</p>
    <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/about1.jpg" class="d-block w-100" alt="Laureate 1">
                <div class="custom-carousel-caption">
                    <h5>Laureate 1</h5>
                    <p>Description of Laureate 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/about2.jpg" class="d-block w-100" alt="Laureate 2">
                <div class="custom-carousel-caption">
                    <h5>Laureate 2</h5>
                    <p>Description of Laureate 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/about3.jpg" class="d-block w-100" alt="Laureate 3">
                <div class="custom-carousel-caption">
                    <h5>Laureate 3</h5>
                    <p>Description of Laureate 3</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/about4.jpg" class="d-block w-100" alt="Laureate 3">
                <div class="custom-carousel-caption">
                    <h5>Laureate 4</h5>
                    <p>Description of Laureate 4</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#customCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <p class="tile-about-p">The artistic design of the diplomas has varied over the years, but the text has always followed the same pattern in the Swedish and Norwegian languages, respectively. The “Swedish” diplomas largely carry the same text, stating the person or persons to whom the prize-awarding body has decided to present the year’s prize plus a citation explaining why. The Norwegian diploma, on the other hand, has never included a prize citation.

The Nobel relief on the physiology or medicine diploma is made of leather, attached to the diploma. After extensive preparations, the bookbinder then mounts the diploma in a leather cover made of the highest quality goatskin. Nowadays the physics diplomas are mounted in a dark blue leather cover, chemistry in red, physiology or medicine in burgunday, economic sciences in dark brown and literature in blue. In addition, the calligraphers have designed special gold monograms for each of the laureates on the outside of the diplomas, which are also found on the boxes in which the diplomas rest. These diploma boxes are all made of gray woven paperboard, lined inside with pigskin suede. The size of the Nobel Prize diploma is 23 x 35 cms.</p>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
