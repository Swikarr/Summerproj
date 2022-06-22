<?php
include 'connectbooking.php';

if(isset($_GET['acceptid'])){
    $id=$_GET['acceptid'];

    $sql="delete from registration where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<h1>Reservation Approved!</h1>";
      // header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>
