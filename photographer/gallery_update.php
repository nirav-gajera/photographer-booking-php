<?php include('header1.php');
require_once('../config/connection.php');

if(isset($_GET['id']) )
{
$id = $_GET['id'];
//$name = $_GET['name'];

$sql="select * from gallery where gallery_id = '".$id."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}
?>

							<h1>Gallery Update</h1>
						

						
						<!--	<div class="col-xs-12"> -->
								<!-- PAGE CONTENT BEGINS -->
								<!--<form class="form-horizontal"  role="form" method="post">
								
								
									
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> gallery_description </label>
										<div class="col-sm-9">
											<input type="text" name="gallery_description" value="<?php echo $row['gallery_description'] ?>">
											</div>
											
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
										<div>
										</form>
										<div class="col-md-offset-3 col-md-9">
											<br>
											<br>
											<button  class="btn btn-info" type="submit">
											<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button> 

											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											
										</div>
									</div>
									</div>-->
									<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
								<!--<form class="form-horizontal" role="form" method="post">-->
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> gallery_description</label><div class="col-sm-9">
											<input name="gallery_description" type="text" id="form-field-1" value="<?php echo $row['gallery_description'] ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> photog_id</label><div class="col-sm-9">
											<input name="photog_id" type="text" id="form-field-1" value="<?php echo $row['photog_id'] ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image</label><div class="col-sm-9">
											<input name="gallery_img" type="file" id="form-field-1" value="<?php echo $row['gallery_img'] ?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											

									<div>
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
											<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
									</div>
									</div>
									<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["gallery_description"]))
		{
			$gallery_description=$_POST["gallery_description"];
			$photog_id=$_POST["photog_id"];
			
							
			if(($gallery_description!='') && ($photog_id!=''))
			{				
				$sql="update gallery set gallery_description='".$gallery_description."',photog_id='".$photog_id."' where gallery_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=gallery.php'>";

				}
			}
			else
			{
					echo "Value is null";
			}
		}
		else
		{
				echo "Value not set";
		}
}

?>