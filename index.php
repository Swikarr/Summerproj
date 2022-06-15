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
</head>
<body>

<!-- Navigation -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Vardani</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Rooms <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Deluxe</a></li>
          <li><a href="#">Standard</a></li>
          <li><a href="#">Royal</a></li>
        </ul>
      </li>
      <li><a href="#">Events</a></li>
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
    
  </div>
</nav>
  


<div class="container">
  <h3>Right Aligned Navbar</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
</div>
<center>
<?php include "footer.php"; ?>
</center>

</body>
</html>
