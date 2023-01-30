
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
$image = ['cola1.jpg','cola2.jpg','cola3.jpg'];
?>
<?
foreach ($image as $img) { ?>
<div class="card" style="width: 18rem;">
        <img src=photo/<?=$img;?> class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
<? } ?>
</body>
</html>
