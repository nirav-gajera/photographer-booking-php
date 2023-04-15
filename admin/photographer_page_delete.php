<?php
require_once('../config/connection.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $sql = "delete from photographer_page where photog_id=$id";

  $result = mysqli_query($conn,$sql);
  
  if($result)
  {
		header("Location:photographer_page.php?msg=success");
  
  }
  else
  {
		header("Location:photographer_page.php?msg=failure");

  }
}
?>