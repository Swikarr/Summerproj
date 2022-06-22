<?php session_start();

if(!isset($_SESSION['username'])){
  echo "You are logged OUT!";
  header('location: login.php');
}
?>
<?php include "header.php"; ?>

<!-- Navigation -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Vardani</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">About</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Rooms <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Bookingform.php">Deluxe</a></li>
          <li><a href="Bookingform.php">Standard</a></li>
          <li><a href="Bookingform.php">Royal</a></li>
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

    <form method="post" action ="Bookingform.php">
    <ul class="nav navbar-nav navbar-right">
      <li><button id="myBtn" onclick="document.getElementById('id03').style.display='block'">Book now</button></li>
    </ul>
   
</form>
</div>
</nav>






<?php include "footer.php"; ?>


</body>
</html>
