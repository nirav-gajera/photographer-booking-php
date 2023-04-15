<?php
require_once('../../../../config/connection.php');
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"]=="POST")
{	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{		
		$username = mysqli_real_escape_string($conn,$_POST['username']);	
		$query = "select * from user where email_id = '$username'";
		$result = mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result);
		if (mysqli_num_rows($result) > 0) 
		{
			$arr = array();
			$to = $row['email_id'];
			$arr = $row	;	
			$otp = mt_rand(000000,999999);
			$query1 = "update user set otp = ".$otp.", otpused = 0 where email_id = '".$to."'";
			$result1 = mysqli_query($conn,$query1);

			if ($result1) 
			{
				$message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
				$subject = "Request For OTP";		
				$mailSent = send_mail($to, $message, $subject);
				if ($mailSent)
					{
						session_start();
						$_SESSION['id'] = $to;
						echo "<script>
						window.location='forgotpasswordotp.php';
						</script>";
				} 
				else
				{
					
				}
				$array = array('status' => '200' , 'details' => $arr);
			}	
			
		}	
		
	} 
	else
	{
		echo "asdasasdad"; die;
	}	 
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include ('header.php');?>

    <div class="tp-page-head"> </div>
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
<div align="center">
<div class="find-section">
<div class="main-container">
<div class="container">
<div class="">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3"></div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="shadow-lg bg-white border mx-auto p-5 mt-5">
<div class="col-md-12 st-tabs">
<!-- Nav tabs -->
<div class="well-box">
	<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <!-- Text input-->
    <div class="form-group">
        <label class="control-label" for="email">E-mail<span class="required">*</span></label>
		<input id="email" name="username" type="text" placeholder="E-Mail" class="form-control input-md" required>
    </div>
    <div class="form-group">
		<button type="submit" id="submit" name="submit" class="btn btn-primary">submit</button>
    </div>
    </form>            
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
