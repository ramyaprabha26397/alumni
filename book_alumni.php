<?php
$con= new mysqli("localhost","root","","alumni");
$slot=$_POST["slot"];
$date=$_POST["date"];
$userid=$_POST["userid"];
$data = explode('-', $date);
$today = date("d");

if ($data[2]-$today >= 7) {
  $studentbookings = $con->query("select * from bookings where user_id=".$userid." and status=2");
  if ($studentbookings->num_rows >= 2) {
    echo "You have already booked 2 slots";
  }else {
    $sql=$con->query("insert into bookings(user_id,slot_id,date,status) values('".$userid."','".$slot."','".$date."',1) ");
    if ($sql) {
      echo "booked successfully";
    }else {
      echo "unable to book";
    }
  }
}else {
  echo "cant book";
}



?>
