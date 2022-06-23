<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Vardani</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bookstyle.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navigation -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Vardani</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="about.php">About Us</a></li>
      <li class=""><a href="room.php">Rooms</a></li>
    
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Contact Us</a></li>
      
    </ul>
    <form method="post" action ="Signup.php">
    <ul class="nav navbar-nav navbar-right">
      <li><button onclick="document.getElementById('id01').style.display='block'">Sign Up</button></li>
      
    </ul>
    </form>
    <form method="post" action ="Login.php">
    <ul class="nav navbar-nav navbar-right">
      <li><button onclick="document.getElementById('id02').style.display='block'">Log In</button></li>
    </ul>
    </form>

    <form method="post" action ="Bookingform.php">
    <ul class="nav navbar-nav navbar-right">
      <li><button id="myBtn" onclick="document.getElementById('id03').style.display='block'">Book now</button></li>
    </ul>
   
    </form>
</div>
</nav>