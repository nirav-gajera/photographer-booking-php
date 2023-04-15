<?php include('header1.php');
require_once('../config/connection.php');

if(isset($_GET['id']) )
{
$id = $_GET['id'];
//$name = $_GET['name'];

$sql="select * from categories where categories_id = '".$id."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}
?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="categories.php">Categories</a>
							</li>
							<li class="active">Upadate Categories</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Upadate Categories
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
								
								
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> categories_name </label><div class="col-sm-9">
											<input type="text" name="categories_name" value="<?php echo $row['categories_name'] ?>">
											</div>
									</div>

									
									
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> categories_description </label><div class="col-sm-9">
											<input type="text" name="categories_description" value="<?php echo $row['categories_description'] ?>"></div>
											
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

									
									          			  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["categories_name"]) && isset($_POST["categories_description"]))
		{
			$categories_name=$_POST["categories_name"];
			$categories_description=$_POST["categories_description"];
							
			if(($categories_name!='') && ($categories_description!=''))
			{				
				$sql="update categories set categories_name='".$categories_name."',categories_description='".$categories_description."' where categories_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=categories.php'>";

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