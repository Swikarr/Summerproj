<?php session_start();

?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="w3-sidebar w3-bar-block w3-black w3-xxlarge" style="width:70px">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a> 
  <a href="display.php" class="w3-bar-item w3-button"><i class="fa fa-book"></i></a> 
  <a href="ourlocation.php" class="w3-bar-item w3-button"><i class="fa fa-map-marker"></i></a>
  <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a> 
</div>

<div style="margin-left:70px">

<div class="w3-container">
<h1>Hotel Vardani Dashboard</h1>
<h3> Welcome <?php echo $_SESSION['username'];?></h3>
<img src="images/1dboard.jpg" alt="room" width="1280" height="500">
</div>

</div>
      
</body>
</html>
