<?php
$con = new mysqli("localhost","root","","alumni");
$username=$_POST["username"];
$password=$_POST["password"];
$sql = $con->query("select * from user where username='".$username."'");
if ($sql->num_rows > 0) {
  $row=$sql->fetch_assoc();
  if ($password==$row["password"]) {
    if ($row["user_type"]==0) {
      echo "<script>document.location='student_dashboard.php?userid=".$row["id"]."'</script>";
    }else if ($row["user_type"]==1){
      echo "<script>document.location='alumni_dashboard.php'</script>";
    }else {
      echo "Unauthorized access";
    }
  }else {
    echo "Password Incorrect";
  }
}else {
  echo "user not found";
}
 ?>
