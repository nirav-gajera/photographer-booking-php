<?php
include ('header.php');
require_once('../../../../config/connection.php');
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	$id=$_SESSION['id'];	
	$otp=$_POST['otp'];
	$npass=$_POST['newpassword'];
	$cpass=$_POST['cpassword'];
    if ($npass != $cpass)
	{   
		echo " <script>
		alert('password must be same');
		window.location='forgotpasswordotp.php';
		</script>";
		exit;
	}
	$query = "update user set otpused = 1,
	password = '".$npass."' where email_id='".$id."' and
    otp = '".$otp."' ";		
	$result = mysqli_query($conn, $query);
	if($result)
	{
	    echo " <script>
	    alert('Password Sucessfully Reset...!');
		window.location='login1.php';
		</script>";
	}		 
}
?>
<!DOCTYPE html>
<html lang="en">
<?php

?>
    <div class="tp-page-head"></div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Forget Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	   <div id="slider" class="owl-carousel owl-theme slider">
			<div class="item"><img src="images/log2.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log1.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log3.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log4.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log5.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log6.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log7.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log9.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log10.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log11.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log12.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log15.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log16.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log18.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log21.jpg" alt="Wedding couple just married"></div>
		</div>
<div class="find-section">
    <div class="">
        <div class="container"><center>
            <div class="col-md-offset- col-md-4 well-box">
                <form method="post">
					
                    <div class="form-group">
                        <label class="control-label" for="otp">otp<span class="required">*</span></label>
                        <input id="otp" name="otp" type="text" placeholder="ex:123456" class="form-control input-md" required>
                    </div>
					<div class="form-group">
                        <label class="control-label" for="password">password<span class="required">*</span></label>
                        <input id="password" name="newpassword" type="text" placeholder="ex:abc@123" class="form-control input-md" required>
                    </div>
					<div class="form-group">
                        <label class="control-label" for="confirm password">confirm password<span class="required">*</span></label>
                        <input id="confirm password" name="cpassword" type="text" placeholder="ex:abc@123" class="form-control input-md" required>
                    </div>
					
                    <div class="form-group">
                        <button id="submit" name="submit" type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </form>
                <!-- Nav tabs -->
                <!-- Tab panes -->
            </div></center>
        </div>
    </div>
    </div>
	
       
	
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
	  <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
	
</body>
</html>
