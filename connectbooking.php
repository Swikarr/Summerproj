<?php
// Database Connection
$responses = [];

$conn = new mysqli('localhost','root','','booking');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}

else{
    if(isset($_POST['submit'])){

        @$arrival = $_POST['arrival'];
        @$departure= $_POST['departure'];
        @$first_name=$_POST['first_name'];
        @$last_name=$_POST['last_name'];
        @$number=$_POST['number'];
        @$phone=$_POST['phone'];
        @$adults=$_POST['adults'];
        @$children=$_POST['children'];
        @$room_pref=$_POST['room_pref'];
       

    $stmt = $conn->prepare("insert into registration(arrival,departure,firstname,lastname,number,phone,adults,children,room_pref) values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssissss", $arrival,$departure,$first_name,$last_name,$number,$phone,$adults,$children,$room_pref );
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo "Booking Successful!";

    exit();
    }
    else{
        echo "No data my dear sir.";
    }
}

?>