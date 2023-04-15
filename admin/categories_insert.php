          			  <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['cname']) && isset($_POST['cdes']))
		{
			$cname = $_POST['cname'];
			$cdes = $_POST['cdes'];
			
			
			if($cname!=' ' && $cdes!=' ')
			{
				$sql = "insert into category(C_name,C_des) values('".$cname."','".$cdes."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=category.php'>";
				}
			}
		}
		else
		{
			echo "value not set";
		}
}


?>