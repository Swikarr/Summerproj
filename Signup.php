
<link rel="stylesheet" href="style.css">

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="connect.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account & receive exciting discount of Membership</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter username" name="username" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="rpsw"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="rpsw" required>
       
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button  type="submit" name="submit" class="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>
