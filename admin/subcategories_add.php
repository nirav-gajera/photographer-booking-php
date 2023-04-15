<?php
include ('header1.php');
require_once('../config/connection.php');
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
								<a href="subcategories.php">Subcategories</a>
							</li>
							<li class="active">Add detail</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					
						
						<div class="pull-left width-50">
						</div><!-- /.pull-left -->
						<div class="pull-left width-50">
						</div><!-- /.pull-left -->
						
						<div class="page-header">
							<h1>
								Add Sub_Categories 
							</h1>
						</div><!-- /.page-header -->

						
							
								<!-- PAGE CONTENT BEGINS -->
								
								
								
								
								<form class="form-horizontal" role="form" method="post">
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> catgories_name</label><div class="col-sm-9">
										<select class="col-xs-10 col-sm-5" name="categories_id">
                         <?php
                                $sql="select * from categories";
								$result = mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($result))
								{
							 ?>
								<option value="<?php echo $row['categories_id']; echo $row['categories_name'];?>"><?php echo $row['categories_name'];?>
								<?php
								}
								?>
                      </select>
										
											
										</div>
									</div>

									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> sub_cat_name </label><div class="col-sm-9">
											<input name="sub_cat_name" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
											
											</div>
											
											 &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;
											&nbsp; &nbsp; &nbsp;

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> sub_cat_description </label><div class="col-sm-9">
											<input name="sub_cat_description" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
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

											</form>
										</div>
									</div>

									<?php
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['categories_id']) && isset($_POST['sub_cat_name']) && isset($_POST['sub_cat_description']))
		{
			$categories_id = $_POST['categories_id'];
			$sub_cat_name = $_POST['sub_cat_name'];
			$sub_cat_description = $_POST['sub_cat_description'];
			
			
			
			if($sub_cat_name!=' ' && $sub_cat_description!=' ' && $categories_id)
			{
				$sql = "insert into `sub_categories`(categories_id,sub_cat_name,sub_cat_description) values('".
				
				$categories_id."','".$sub_cat_name."','".$sub_cat_description."')";
		//	echo $sql;
		//sdie;
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=subcategories.php'>";
				}
			}
		}
		else
		{
			echo "value not set";
		}
}


?>

									