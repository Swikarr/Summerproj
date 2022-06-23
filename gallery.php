<?php include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
<h2 style="text-align:center"> Gallery </h2> <br> 

<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 100%;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>


<div class="gallery">
    <img src="images/lobby.jpg" alt="Lobby" width="600" height="400">
  <div class="desc">Our Lobby</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="images/entrance.jpg" alt="Entrance" width="600" height="400">
  </a>
  <div class="desc">Entrance</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="images/dining.jpg" alt="Inner Dining" width="600" height="400">
  </a>
  <div class="desc">Inner Dining</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="images/reception.jpg" alt="Reception" width="600" height="400">
  </a>
  <div class="desc">Reception</div>
</div>



</body>

</html>