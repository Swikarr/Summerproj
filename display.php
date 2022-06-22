<?php include 'connectbooking.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD Operation</title>
    
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"> <a href="bookingform.php"
        class="text-light"> Add Booking </a>
    
    </button>



    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Arrival</th>
      <th scope="col">Departure</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">No. of Rooms</th>
      <th scope="col">Phone</th>
      <th scope="col">Adult</th>
      <th scope="col">Children</th>
      <th scope="col">Room Preference</th>
      <th scope="col">Operations</th>


    </tr>
  </thead>
  <tbody>

    <?php

    $sql= "Select * from registration";
    $result= mysqli_query($conn,$sql);
    if($result){
        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $arrival=$row['arrival'];
            $departure=$row['departure'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $number=$row['number'];
            $phone=$row['phone'];
            $adults=$row['adults'];
            $children=$row['children'];
            $room_pref=$row['room_pref'];
           
            echo '    <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$arrival.'</td>
            <td>'.$departure.'</td>
            <td>'.$firstname.'</td>
            <td>'.$lastname.'</td>
            <td>'.$number.'</td>
            <td>'.$phone.'</td>
            <td>'.$adults.'</td>
            <td>'.$children.'</td>
            <td>'.$room_pref.'</td>
            
            <td>
                <button class="btn btn-primary"> <a href="accept.php?acceptid='.$id.'" class="text-light">Accept</a></button>
                <button class="btn btn-danger"> <a href="reject.php?deleteid='.$id.'" class="text-light">Reject</a></button>        
            </td>
          </tr>';

        }


    }
    ?>
</tbody>
</table>
<div class="container">
    <button class="btn btn-primary my-5"> <a href="dashboard.php"
        class="text-light">Back</a>
    
    </button>


</div>
    
</body>
</html>