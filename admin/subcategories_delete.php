<?php
require_once('../config/connection.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $sql = "delete from sub_categories where sub_cat_id=$id";
 // echo $sql;
 //die;

  $result = mysqli_query($conn,$sql);
  
  if($result)
  {
		header("Location:subcategories.php?msg=success");
  
  }
  else
  {
		header("Location:subcategories.php?msg=failure");

  }
}
?>