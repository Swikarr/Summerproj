
<!-- Connection into database Sign up-->
<?php

$conn = new mysqli('localhost','root','','signup');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}

else{ 
  if(isset($_POST['submit'])){
  @$username = $_POST['username'];
  @$email = $_POST['email'];
  @$psw = $_POST['psw'];
  @$rpsw= $_POST['rpsw'];

  $pass=password_hash($psw, PASSWORD_BCRYPT);
  $rpass=password_hash($rpsw,PASSWORD_BCRYPT);

  $emailquery= "select * from registration where email='$email'";
  $query=mysqli_query($conn,$emailquery);

  $emailcount= mysqli_num_rows($query);

  if($emailcount>0){
   echo "Valid Email ";
  }else{
     if($psw ===$rpsw){

    $stmt = $conn->prepare("insert into registration(username,email,psw,rpsw) values(?,?,?,?)");
    $stmt->bind_param("ssss", $username , $email, $psw, $rpsw );
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo "<h1>Registration Successful!</h1>";  
     } 
    else{
      echo "<p style='color:red;'>The Email or password doesn't match!</p>" ."  ". "  ". "<a href='login.php'>Log In Again </a>";
     
     } 
    //Redirect
  // header("location: http://localhost/summerproj/");

     exit();

     }
    }
  }
    ?>


