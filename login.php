<?php
session_start();
?>
<link rel="stylesheet" href="style.css">

<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['psw'];

    $email_search =" select * from registration where email='$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
      $email_pass=mysqli_fetch_assoc($query);

      $db_pass= $email_pass['psw'];
      $_SESSION['username']= $email_pass['username'];

  /*    $pass_decode =password_verify($password,$db_pass); */

      if($db_pass){
        echo "<p style='color:green;'> login success.</p>";
        echo "<p style='color:green;'><b>Congratulations!<b></p>";
        ?>
        <script>
          location.replace("index.php");
          </script>
      <?php
      }
      else{
      echo "password incorrect";
      }
    }
    else{
      echo "ïnvalid Email";
    }
      }
?>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
    <div class="container">
      <h1>Log In</h1>
      <p>Welcome back!</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

     <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> --> 

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" class="signup">Log In</button>
      </div>
    </div>
  </form>
</div>
