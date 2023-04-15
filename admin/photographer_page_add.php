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
								photographer_page
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
								
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> photog_name</label><div class="col-sm-9">
											<input name="photog_name" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> address</label><div class="col-sm-9">
											<input name="address" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> email_id</label><div class="col-sm-9">
											<input name="email_id" type="text" id="form-field-1"  class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> contact_no</label><div class="col-sm-9">
											<input name="contact_no" type="number" id="form-field-1"  class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> image</label><div class="col-sm-9">
											<input name="img" type="file" id="form-field-1"  class="col-xs-10 col-sm-5" />
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

/*if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['photog_name']) && isset($_POST['address']) && isset($_POST['email_id']) && isset($_POST['contact_no']))
		{
			$photog_name = $_POST['photog_name'];
			$address = $_POST['address'];
			$email_id = $_POST['email_id'];
			$contact_no = $_POST['contact_no'];
			
			
			if($photog_name!='' && $address!='' && $email_id!='' && $contact_no!='')
			{
				$sql = "insert into photographer_page(photog_name,address,email_id,contact_no) values('".$photog_name."','".$address."','".$email_id."','".$contact_no."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=photographer_page.php'>";
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

		if(isset($_POST['photog_name']) && isset($_POST['address']) && isset($_POST['email_id']) && isset($_POST['contact_no']))
		{
			$photog_name = $_POST['photog_name'];
			$address = $_POST['address'];
			$email_id = $_POST['email_id'];
			$contact_no = $_POST['contact_no'];
			$img = $_FILES['img']['name'];
			//echo "D";exit;
			{
				$uploaddir = '../uploads/';
				$uploadfile = $uploaddir . basename($_FILES['img']['name']);
				move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
				
				$sql = "insert into photographer_page(photog_name,address,email_id,contact_no,img) values('".$photog_name."','".$address."','".$email_id."','".$contact_no."','".$img."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=photographer_page.php'>";
				}
			}	
		}
		else
		{
			echo "value not set";
		}
}




?>								