
<!-- Connection into database -->
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
    $stmt = $conn->prepare("insert into registration(username,email,psw,rpsw) values(?,?,?,?)");
    $stmt->bind_param("ssss", $username , $email, $psw, $rpsw );
    $stmt->execute();
    echo "Registration Successful!";
    //Redirect
  //  header("location: http://localhost/summerproj/");
    $stmt->close();
    $conn->close();
     exit();
  }
}
    ?>


