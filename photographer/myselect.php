<?php  include 'header.php';?>

<?php require_once('config/connection.php')?>

<div class="page-content">
						
						<div class="page-header">
							<h1>
							User Form
								
							</h1>
						</div><!-- /.page-header -->
 
							
								
<?php
	
	$sql="Select * from User";
	
	$result=mysqli_query($conn,$sql);
	
	echo "<a href=\"insert.php?\">Add Record</a>";
	
	echo "<table border='1' height='250' width='300'>";
	echo "<tr>";
	echo "<td> USER ID </td>";
	echo "<td> NAME </td>";
	echo "<td> ACTION </td>";
	echo "</tr>";
	 while($row = mysqli_fetch_array($result))
	 {
		 echo "<tr>";
		 echo "<td>" . $row['USER_ID'] . "</td>";
		 echo "<td>" . $row['FIRST_NAME'] . "</td>";
		 //echo "<td><a href=\"delete.php?id=$row[USER_ID]\">DELETE</a><a href=\"update.php?id=$row[USER_ID]\">update</a> </td>";
		 echo "<td><a href=\"delete.php?id=$row[USER_ID]\"><img src=\"delete.png\" height='25'/></a> &nbsp; &nbsp;<a href=\"update.php?id=$row[USER_ID]\"><img src=\"edit.jpg\" height='25'/></a></td>";
		 echo "</tr>";
	 }

?>

</div>
</form>
</div>
</div>
<div class="space-4"></div>
<div class="hr hr-24"></div>
<br/> <br/><br/><br/>
</html>
