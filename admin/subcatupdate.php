<?php include('header1.php');
require_once('../config/connection.php');

if(isset($_GET['id']) )
{
$id = $_GET['id'];
//$name = $_GET['name'];

$sql="select * from sub_categories where sub_cat_id= '".$id."'";
$result=mysqli_query($conn,$sql);
$row2 = mysqli_fetch_array($result);
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
								<a href="subcategories.php">subcategories</a>
							</li>
							<li class="active">Upadate sub categories</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Upadate sub categories
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
								
								
									
									 
									 <div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> categories_id </label><div class="col-sm-9">
											<select name="categories_id">
                        <?php
                                $sql="select * from categories";
								$result = mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($result))
								{
							 ?>
								<option value="<?php echo $row['categories_id'];?>"
								<?php if($row['categories_name']==$id){echo 'selected';}?>> 
								<?php echo $row['categories_name'];?>
								</option>
								<?php
								}
								?>
				   </option>
                        
                      </select>
											<!--<input type="text" name="categories_id" value="<?php echo $row['categories_id'] ?>"> -->
											</div>
									</div>
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> sub_cat_name </label><div class="col-sm-9">
											<input type="text" name="sub_cat_name" value="<?php echo $row2['sub_cat_name'] ?>">
											</div>
									</div>
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> sub_cat_description </label><div class="col-sm-9">
											<input type="text" name="sub_cat_description" value="<?php echo $row2['sub_cat_description'] ?>">
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

									
									          			  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["categories_id"]) && isset($_POST["sub_cat_name"]) && isset($_POST["sub_cat_description"]))
		{
			$categories_id=$_POST["categories_id"];
			$sub_cat_name=$_POST["sub_cat_name"];
			$sub_cat_description=$_POST["sub_cat_description"];
			
							
			if(($categories_id!='') && ($sub_cat_name!='') && ($sub_cat_description!=''))
			{				
				$sql="update sub_categories set categories_id='".$categories_id."',sub_cat_name='".$sub_cat_name."',
				sub_cat_description='".$sub_cat_description."' where  	sub_cat_id= '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3; url=subcategories.php'>";

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