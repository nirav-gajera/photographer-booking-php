
<?php 

require_once('../../../../config/connection.php');
$emailErr = $passwordErr = "";
$email = $password = "";
if($_SERVER["REQUEST_METHOD"] =="POST")
{
if(isset($_POST["username"]) && isset($_POST["password"]))
	{
	
		if(empty($_POST["email_id"]))
		{
			$emailErr="Email is required";
		}
		else
			{
				$email=$_POST["email_id"];
			}
			if(empty($_POST["password"]))
			{
				$passwordErr="password is required";
			}
			else
				{
					$password=$_POST["password"];
				}
		$email_id = $_POST["username"];
		$password = $_POST["password"];
		
		if($email_id !='' && $password !='')
		{
			$sql="select user_id,email_id,password,user_name from user where email_id='".$email_id."'
			and password='".$password."' and is_admin= 0";
		$result = mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION["user_name"] = $row['user_id'];
				header('location:index.php');
				}
				else
				{
					echo " <script>
													  alert('invalid password');
													  window.location='index.php';
													  </script>";
				}	
			}
		}
}
?>		
<!DOCTYPE html>
<html lang="en">
<?php
include ('header.php');?>
<!-- Mirrored from abc/wedding/wedding-new/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:40:19 GMT -->

	
	<style>.error{color:red;}</style>
	
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Login Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
        <!-- slider start-->
       
           
     <div id="slider" class="owl-carousel owl-theme slider">
			<div class="item"><img src="images/log2.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/log1.jpg" alt="Wedding couple just married"></div>
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
         <!--  <div class="row">-->
                 <div class="col-md-12 st-tabs">
                    <!-- Nav tabs -->
                    <div class="well-box">
                       <h3><center>Login</center></h3>
                         <form method="post">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="username">Email id<span class="required">*</span></label>
                                <input id="username" name="username" type="text" placeholder="email id" class="form-control input-md" >
								<span class="error"> <?php echo $emailErr; ?>  </span>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="password">Password<span class="required">*</span></label>
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" >
									<span class="error"> <?php echo $passwordErr; ?>  </span>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                               <center> <button id="submit" type="submit" name="submit" class="btn btn-primary btn-lg">Login</button></center>
                                
                            </div>
							<div class="pull-left">
							<a href="registration.php" > <small><u>Not Registered ?</u></small></a>
												
											</div>
							<div>
							<a href="forgetpassword.php" class="pull-right"> <small><u>Forgot Password ?</u></small></a>
												
											</div>
                        
						 </form>
                      </div>
                     </div> 
                    </div>
		 	      </div>
		 	    </div>
           <!--</div>-->
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


<!-- Mirrored from abc/wedding/wedding-new/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:40:20 GMT -->

</html>
