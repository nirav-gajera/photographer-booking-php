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
								<a href="categories.php">Categories</a>
							</li>
							<li class="active">Add Categories</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Categories
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
								
								
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> categories_name </label><div class="col-sm-9">
											<input name="categories_name" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
										</div>
									</div>

									
									
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> categories_description </label><div class="col-sm-9">
											<input name="categories_description" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
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

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['categories_name']) && isset($_POST['categories_description']))
		{
			$categories_name = $_POST['categories_name'];
			$categories_description = $_POST['categories_description'];
			
			
			if($categories_name!='' && $categories_description!='')
			{
				$sql = "insert into categories(categories_name,categories_description) values('".$categories_name."','".$categories_description."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=categories.php'>";
				}
			}
		}
		else
		{
			echo "value not set";
		}
}


?>