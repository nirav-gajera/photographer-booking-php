<!DOCTYPE html>
<html lang="en">
<?php
include ('header.php');
require_once('../../../../config/connection.php');?>

<!-- Mirrored from abc/wedding/wedding-new/signup-couple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:40:10 GMT -->

    

        <!-- slider start-->
       
           
   
			
        <!-- slider start-->
       
           
     <div id="slider" class="owl-carousel owl-theme slider">
			
			<div class="item"><img src="images/reg2.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg3.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg4.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg5.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg6.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg7.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg8.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg9.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg10.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/reg11.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/sports.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/candle.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/gold.jpg" alt="Wedding couple just married"></div>
			
			
			
		</div>
		
		
		<div class="find-section">	 
    <div class="main-container">
        <div class="container">
		 <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
            <div class="col-lg-6 col-md-6 col-sm-6"><!-- style="margin-right :500px" >-->
                <div class="shadow-lg bg-white border mx-auto p-5 mt-5">
                
            <!--<div class="row">-->
               <!-- <div class="col-md-5 singup-couple">-->
                    <div class="well-box">
					
                        <h2>Enter your detail</h2>
                        <form method="POST">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name">Your name<span class="required">*</span></label>
                                <input id="name" name="user_name" type="text" placeholder="Your name" class="form-control input-md" required>
                            </div>
							 <div class="form-group">
                                <label class="control-label" for="address">Address<span class="required">*</span></label>
                                <input id="Address" name="address" type="text" placeholder="Address" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="email_id" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>
							<div class="form-group">
                                <label class="control-label" for="password">password<span class="required">*</span></label>
                                <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required>
                            </div>
							 <div class="form-group">
                                <label class="control-label" for="Contact No">Contact No<span class="required">*</span></label>
                                <input id="Contact No" name="contact_no" type="" placeholder="Contact No" class="form-control input-md" required>
                            </div>
                            <!-- Select Basic -->
                            
                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary" type="submit">Create An Account</button>
                            </div>
                        </form>
                    </div>
                    <p style="color:black;">Already a Member ?   <a href="login1.php.">Log In</a></p>
                </div>
            </div>
           
       </div>
    </div>
</div>
</div>
</div>


	  <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['user_name']) && isset($_POST['address']) && isset($_POST['email_id']) && isset($_POST['password']) 
		&& isset($_POST['contact_no']) )
		{
			$user_name = $_POST['user_name'];
			$address = $_POST['address'];
			$email_id = $_POST['email_id'];
			$password = $_POST['password'];
			$contact_no = $_POST['contact_no'];
			$regidate = date('y-m-d'); 
			
			if($user_name!='' && $address!='' && $email_id!='' && $password!='' && $contact_no!='' && $regidate!='' )
			{
				$sql = "insert into user(user_name,address,email_id,password,contact_no,regidate) values('".$user_name."',
				'".$address."','".$email_id."','".$password."',
				'".$contact_no."','".$regidate."')";
	//echo $sql;
	 //die;
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=login1.php'>";
				
				}
			}
		}
		else
		{
			echo "value not set";
		}
}


?>
    <!-- /.Footer -->
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script src="js/jquery.sticky.js"></script>
	<script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script src="js/header-sticky.js"></script>
    <script type="text/javascript" src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="js/date-script.js"></script>
</body>


<!-- Mirrored from abc/wedding/wedding-new/signup-couple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:40:19 GMT -->
</html>
