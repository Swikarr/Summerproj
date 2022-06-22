<?php
include 'connectbooking.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from registration where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>
