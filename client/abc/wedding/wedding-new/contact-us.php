<!DOCTYPE html>
<html lang="en">
<?php
include ('header.php'); 
require_once('../../../../config/connection.php');


	
	if(isset($_GET['id'])  && isset($_GET['name']));
	{	
		$sql = "select * from user where user_id = '".$id."'";
		//echo $sql;
		//die;
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
	}

?>	
    <!-- /.page header -->
	<!-- static about  -->
	
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	</div>








	 <div id="slider" class="owl-carousel owl-theme slider">
			
			<div class="item"><img src="images/con1.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con2.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con3.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con4.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con5.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con6.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con7.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con8.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con9.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con10.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/con11.jpg" alt="Wedding couple just married"></div>
			
		</div>	
	


					
					
<div class="find-section">
 <div class="main-container">
   <div class="container" style="display: flex;"><!--container main div chhe-->
   <div class="con" style="height: 100%; width: 50%; background-color: white; color: black;"><!-- con ae cintainer no sub div chhe -->
   <!--<div class="well-box" style="background-color:white;">
                       	  
                   </div>-->
				  
		 <table  cellspacing="15px" cellpadding="10px" height="400px" width="550px" style="margin:50px 0px 370px 0px; ">

		<tr>
			<td colspan="2"> <span style="font-weight: bold;"><h2><b> FOR MORE </b></h2></span> <h3>INFORMATION</h3></td>
		</tr>
		<tr>
			<td style="text-align: center; padding: 0px 40px; "><i class="fa fa-phone" style="font-size:30px"></i></td>
			<td style="text-align:left;"><p><h3><b>Mobile No:</b></h3></p><p>+91 88888 88888</p></td>
		</tr>

		<tr>
			<td style="text-align: center;"><i class="fa fa-envelope" aria-hidden="true" style="font-size:30px"></i></td>
			<td style="text-align:left;"><p><h3><b>Mail:</b></h3></p><p>candidclicks0@gmail.com</p></td>
		</tr>

		<tr>
			<td><i class="fa fa-map-marker" aria-hidden="true" style="font-size:30px"></i></td>
			<td style="text-align:left;"><p><h3><b>Location:</b></h3></p><p>Takshshila  Building, xnsxnksx, Kerala, India 695017</p></td>
		</tr>

		

	</table>
				    
					
   </div>
	<!-- <div class="">
       <div class="row">-->
         <!--<div class="col-lg-3 col-md-3 col-sm-3"></div>-->
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="shadow-lg bg-white border mx-auto p-5 mt-5">
         <!--  <div class="row">-->
                 <div class="col-md-12 st-tabs">
                    <!-- Nav tabs -->
										
                    <div class="well-box"  style="background-color:white;">
                       <h3><center>Login</center></h3>
                         <form method="post">
					
                        <p><h2>Please fill out the form below,<br> we will get back to you as soon as possible.</h2></p>
                        <form method="POST">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="first">First Name <span class="required">*</span></label>
                                <input id="first" name="firstname" type="text" placeholder="First Name" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                           
                            <!-- Text input-->
                            <div class="form-group">
                                <label class=" control-label" for="email">E-Mail <span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class=" control-label" for="phone">Phone <span class="required">*</span></label>
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" 
								 required>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class=" control-label" for="category">Photographer name <span class="required">*</span></label>
                                <select id="photog_name" name="photog_name" class="form-control selectpicker">
                                <?php
					$sql="select * from photographer_page 
					     ";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 
						 {
						 ?>       
								  <option value="<?php echo $row['photog_id']?>"><?php echo $row['photog_name']?></option>
								  <?php
								  }
								  ?>
                                    
                                </select>
                            </div>
                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="  control-label" for="message">Message</label>
                                <textarea class="form-control" placeholder="Write Your Message" rows="6" id="message" name="message"></textarea>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
							
                        </form>
                    </div>
					
					
					
					
					<!--  next box  -->
					
					
					
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
  
</div>

  <div class="footer">
        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 ft-aboutus">
                    <h2>Candid Clicks</h2>
                    <p>Thank you for spending time looking through our work.Thank you so much once again, and we greatly appreciate your patience.
					</p>
                    <p class="btn btn-default">Thank You</p> </div>
                <div class="col-md-3 ft-link">
                    <h2>Useful links</h2>
                    <ul>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-4 newsletter">
                    
                    <div class="social-icon">
                        <h2>Be Social &amp; Stay Connected</h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if( isset($_POST['photog_name']) && isset($_POST['firstname']) && isset($_POST['email'])
		&& isset($_POST['phone']) && isset($_POST['message']))
		{
			
			$photog_name = $_POST['photog_name'];
			$firstname = $_POST['firstname'];
			
			$email = $_POST['email'];
            $phone = $_POST['phone'];
			//$category = $_POST['category'];
			$message = $_POST['message'];
			
			if(($photog_name!='') && ($firstname!='')  && ($email!='')  && ($phone!='')   && ($message!='') )
			{
				$sql = "insert into `contact-us`(photog_id,firstname,email,phone,message) values('".$photog_name."','".$firstname."',
				'".$email."','".$phone."','".$message."')";
				
	 //echo $sql;
	 //die;
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=index.php'>";
				
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
	<script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>

</body>


<!-- Mirrored from abc/wedding/wedding-new/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:43:15 GMT -->
</html>
