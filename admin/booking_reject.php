<?php
session_start();
require_once('../config/connection.php');

if(isset($_GET['id']))
{
		 $uid=$_GET['uid'];
		$id=$_GET["id"];

				
			$sql="update booking set booking_status='2' where booking_id = '".$id."'";
			
				$result=mysqli_query($conn,$sql);
			
			
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=homepage.php'>";

				}
			}
		
		else
		{
				echo "Value not set";
		}


?>

