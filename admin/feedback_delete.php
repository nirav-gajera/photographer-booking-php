<?php
require_once('../config/connection.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $sql = "delete from feedback where feedback_id=$id";

  $result = mysqli_query($conn,$sql);
  
  if($result)
  {
		header("Location:feedback.php?msg=success");
  
  }
  else
  {
		header("Location:feedback.php?msg=failure");

  }
}
?>