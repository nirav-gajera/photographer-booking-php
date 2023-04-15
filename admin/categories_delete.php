<?php
require_once('../config/connection.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $sql = "delete from categories where categories_id=$id";
  //echo $sql;
  //die;

  $result = mysqli_query($conn,$sql);
  
  if($result)
  {
		header("Location:categories.php");
  
  }
  else
  {
		header("Location:categories.php?msg=failure");

  }
}
?>