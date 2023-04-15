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
								<a href="#">Forms</a>
							</li>
							<li class="active">Form Elements</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1>
								Gallery
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<!--<form class="form-horizontal" role="form" method="post">-->
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> gallery_description</label><div class="col-sm-9">
											<input name="gallery_description" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image</label><div class="col-sm-9">
											<input name="gallery_img" type="file" id="form-field-1"  class="col-xs-10 col-sm-5" />
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

/*if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['gallery_description']))
		{
			$gallery_description = $_POST['gallery_description'];
			
			
			if($gallery_description!='')
			{
				$sql = "insert into gallery(gallery_description) values('".$gallery_description."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=gallery.php'>";
				}
			}
		}
		else
		{
			echo "value not set";
		}
}*/
if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['gallery_description']))
		{
			$gallery_description = $_POST['gallery_description'];
			$categories_id = $_POST['categories_id'];
			$photog_id = $_POST['photog_id'];
			$gallery_img = $_FILES['gallery_img']['name'];
			
			//print_r($gallery_img);
			
			/*echo $filename = $file['name'];exit;
			$filepath = $file['tmp_name'];
			$fileerror = $file['error'];*/
		
			//if($fileerror == 0)
			{
				
				//$destfile='uploads/'.$gallery_img;
				
				//move_uploaded_file($destfile,$destfile);
				$uploaddir = '../uploads/';
				$uploadfile = $uploaddir . basename($_FILES['gallery_img']['name']);
				move_uploaded_file($_FILES['gallery_img']['tmp_name'], $uploadfile);
				
				
				// category_id add and phpot_id add
				$sql = "insert into gallery(gallery_description,gallery_img,categories_id,photog_id) values('".$gallery_description."','".$gallery_img."','".$categories_id."','".$photog_id."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=gallery.php'>";
				
				}
				
			}
			
			
			/*if($gallery_description!='')
			{
				//$sql = "insert into gallery(gallery_description) values('".$gallery_description."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=gallery.php'>";
				}
			}*/
		}
		else
		{
			echo "value not set";
		}
}


?>								