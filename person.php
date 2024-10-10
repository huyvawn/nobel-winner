<?php
require_once("functions/db.php");
$id=$_GET["id"];
$sql="select * from person where id=$id";
$sqlPicture="select * from picture where person_id= $id";
$person=findById($sql);
if($person == null){
    header("Location: 404notfound.php");
    die();
}
$pictures=select($sqlPicture);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biography</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/person.css"> -->
    <link rel="stylesheet" href="css/person1.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
    <div class="col-3" id="navigate">
    <h4>Navigate</h4>
    <hr>
    1.<a href="#life"> Life</a> <br>
    2.<a href="#work"> Work</a> <br>
    3.<a href="#biograph"> Biography</a> <br>
    4.<a href="#photo-gallery"> Photo Gallery</a>
    <hr>
    </div>
    <div class="col">
    <h2 class="header-h3"><?php echo $person["name"];?></h2>
    <h2>Facts</h2>
    <div class="row fact" id="fact">
        <div class="col-3">
            <img class="person-img" src="<?php echo $person["thumbnail"]; ?>" alt="Person's Photo">
            <p>Photo from the Nobel Foundation archive.</p>
        </div>
        <div class="col">
            <p><?php echo $person["fact"]?></p>
        </div>
        <hr>
    </div>
    <div class="row life" id="life">
        <h3>Life</h3>
        <p><?php echo $person["family"];?></p>
        <hr>
    </div>
    <div class="row work" id="work">
        <h3>Work</h3>
        <p><?php echo $person["career"] ?></p>
        <hr>
    </div>
    <div class="row biograph" id="biograph">
        <h3>Biography</h3>
        <p><?php echo $person["note"]; ?></p>
        <hr>
    </div>
    <div class="row photo-gallery" id="photo-gallery">
        <h3>Photo Gallery</h3>
        <?php foreach ($pictures as $item) : ?>
        <div class="col-6">
        <figure class="gallery">
  <img src="<?php echo $item["url"]; ?>" alt="picture" style="width:100%; height: 350px; object-fit:contain">
  <figcaption><?php echo $item["description"]; ?></figcaption>
        </figure>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
    <hr>
</div>
<div class="row mb-3" id="announce">
  
<h3 class="header-h3">Watch the 2024 Nobel Prize announcements</h3>

<div class="col-6">
<hr>
<h2>Coming Up</h2>
<p class="mt-3">Don't miss the Nobel Prize announcements 7-14 October!</p>
<br>
<p> Watch the live stream of the announcements.</p>
</div>
<div class="col">
  <a href="index.php">
    <img src="https://www.nobelprize.org/uploads/2023/09/2024_Announcement_Recommended_Live-992x656.jpg" alt="...">
  </a>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>