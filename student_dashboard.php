<?php
$userid = $_GET["userid"];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>Student Alumni Booking, Welcome <?php echo $userid; ?></h1>
      <form class="" action="book_alumni.php" method="post">
<label>Slot time : </label>
        <select class="" name="slot">
          <option value="1">Slot-1(1pm-2pm)</option>
          <option value="2">Slot-2(4pm-5pm)</option>
          <option value="3">Slot-3(6pm-7pm)</option>
        </select><br><br>
<label>Date : </label>
        <input type="date" name="date"><br><br>
        <input type="hidden" name="userid" value="<?php echo $userid ?>">
        <input type="submit" value="Book">
      </form>
    </center>

  </body>
</html>
