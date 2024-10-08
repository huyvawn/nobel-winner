<?php
require_once("functions/db.php");
$id=$_GET["id"];
$sql="select * from person where id=$id";
$person=findById($sql);
if($person == null){
    header("Location: 404notfound.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biography</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/person.css">
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-3"></div>
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
    </div>
    </div>
    <hr>
</div>
<h3 class="header-h3">Watch the 2024 Nobel Prize announcements</h3>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>