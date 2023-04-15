<?php include('header1.php');
require_once('../config/connection.php');

if(isset($_GET['id']) && isset($_GET['name']) )
{
$id = $_GET['id'];
//$name = $_GET['name'];

$sql="select * from user where sub_cat_id = '".$id."'";
 $result = mysqli_query($conn,$sql);
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
								<a href="#">Forms</a>
							</li>
							<li class="active">Form Elements</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					
						
						<div class="pull-left width-50">
						</div><!-- /.pull-left -->
						<div class="pull-left width-50">
						</div><!-- /.pull-left -->
						
						<div class="page-header">
							<h1>
								Update Sub_Categories 
							</h1>
						</div><!-- /.page-header -->

						
							
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
								<div class="form-group">
								
								
								
										<form class="form-horizontal"  role="form" method="post">
								
								
										<form class="form-horizontal"  role="form" method="post">
								
								
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> categories_name</label><div class="col-sm-9">
										
										</div>
										<select class="form-control" name="categories_id">
                       
				   
                        
                      </select>
									</div> 
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> sub_cat_name </label><div class="col-sm-9">
											<input type="text" name="sub_cat_name" value="<?php echo $row['sub_cat_name'] ?>">
											</div>
											
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
										<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> sub_cat_description </label><div class="col-sm-9">
											<input type="text" name="sub_cat_description" value="<?php echo $row['sub_cat_description'] ?>">
											</div>
											
											
										</div>

										
										</form>
										
											<br>
										</form>
										
											<br>
										
											

									<div>
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
											<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											</form>
										</div>
									</div>

									</div>
									
									<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["sub_cat_name"]) && isset($_POST["sub_cat_description"]))
		{
			$sub_cat_name=$_POST["sub_cat_name"];
			$sub_cat_description=$_POST["sub_cat_description"];
							
			if(($sub_cat_name!='') && ($sub_cat_description!=''))
			{				
				$sql="update sub_categories set sub_cat_name='".$sub_cat_name."',sub_cat_description='".$sub_cat_description."' where sub_cat_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=sub_categories.php'>";

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
									
									    	