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
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-3"></div>
    <div class="col">
    <h2><?php echo $person["name"];?></h2>
    <h2>Facts</h2>
    <div class="row fact" id="fact">
        <div class="col-3"><p>Photo description</p></div>
        <div class="col">
            <p><?php echo $person["fact"]?></p>
        </div>
    </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>