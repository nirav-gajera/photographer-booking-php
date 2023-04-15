<?php
require_once('../config/connection.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $sql = "delete from gallery where gallery_id=$id";

  $result = mysqli_query($conn,$sql);
  
  if($result)
  {
		header("Location:gallery.php?msg=success");
  
  }
  else
  {
		header("Location:gallery.php?msg=failure");

  }
}
?>