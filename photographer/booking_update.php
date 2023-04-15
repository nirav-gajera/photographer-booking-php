<?php include('header1.php');
require_once('../config/connection.php');

if(isset($_GET['id']) )
{
$id = $_GET['id'];
//$name = $_GET['name'];

$sql="select * from booking where booking_id = '".$id."'";
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
								<a href="booking.php">booking</a>
							</li>
							<li class="active">Update booking </li>
						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Update booking
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post">
								
								
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> booking_id </label><div class="col-sm-9">
											<input type="text" name="booking_id" value="<?php echo $row['booking_id'] ?>">
											</div>
									</div>
									
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> user_id </label><div class="col-sm-9">
											<input type="text" name="user_id" value="<?php echo $row['user_id'] ?>"></div>
									</div>	

									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> booking_date </label><div class="col-sm-9">
											<input type="text" name="booking_date" value="<?php echo $row['booking_date'] ?>">
											</div>
									</div>
									
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"> payment </label><div class="col-sm-9">
											<input type="text" name="payment" value="<?php echo $row['payment'] ?>">
											</div>
									</div>
									
										

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
								</form>		
										</div>
										</div>
									</div>

									<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["booking_id"]) && isset($_POST["user_id"]) && isset($_POST["booking_date"]) 
		&& isset($_POST["payment"]))
		{
			$booking_id=$_POST["booking_id"];
			$user_id=$_POST["user_id"];
			$booking_date=$_POST["booking_date"];
			$payment=$_POST["payment"];
			
							
			if(($booking_id!='') && ($user_id!='') && ($booking_date!='') && ($payment!=''))
			{				
				$sql="update booking set booking_id='".$booking_id."',user_id='".$user_id."',
				booking_date='".$booking_date."',payment='".$payment."'
				where  	booking_id= '".$id."'";
		//echo $sql;
		//die;
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3; url=booking.php'>";

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