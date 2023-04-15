<?php include('header1.php');
require_once('../config/connection.php');

if(isset($_GET['id']) )
{
$id = $_GET['id'];
//$name = $_GET['name'];

$sql="select * from photographer_page where photog_id= '".$id."'";
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
								<a href="photographer_page.php">photographer_page</a>
							</li>
							<li class="active">Upadate photographerdetail</li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Upadate photographer_detail
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
								
								
									
									 
									 <div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> photog_name </label><div class="col-sm-9">
											<input type="text" name="photog_name" value="<?php echo $row['photog_name'] ?>">
											</div>
									</div>
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> address </label><div class="col-sm-9">
											<input type="text" name="address" value="<?php echo $row['address'] ?>">
											</div>
									</div>
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> email_id </label><div class="col-sm-9">
											<input type="text" name="email_id" value="<?php echo $row['email_id'] ?>">
											</div>
									</div>
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> contact_no </label><div class="col-sm-9">
											<input type="text" name="contact_no" value="<?php echo $row['contact_no'] ?>">
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
		if (isset($_POST["photog_name"]) && isset($_POST["address"]) && isset($_POST["email_id"]) 
		&& isset($_POST["contact_no"]))
		{
			$photog_name=$_POST["photog_name"];
			$address=$_POST["address"];
			$email_id=$_POST["email_id"];
			$contact_no=$_POST["contact_no"];
							
			if(($photog_name!='') && ($address!='') && ($email_id!='') && ($contact_no!=''))
			{				
				$sql="update photographer_page set photog_name='".$photog_name."',address='".$address."',
				email_id='".$email_id."',contact_no='".$contact_no."' where  	photog_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3; url=photographer_page.php'>";

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