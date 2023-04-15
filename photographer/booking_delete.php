<?php
require_once('../config/connection.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $sql = "delete from booking where booking_id=$id";

  $result = mysqli_query($conn,$sql);
  
  if($result)
  {
		header("Location:booking.php?msg=success");
  
  }
  else
  {
		header("Location:booking.php?msg=failure");

  }
}
?>