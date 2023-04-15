<?php
include ('header.php');

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql="select * from booking b
	join photographer_page p where b.photog_id=p.photog_id and b.photog_id='".$id."'";
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
}
?>  
<?php
if(isset($_GET['id']))
{
	$pid = $_GET['pid'];
	$sql="select * from booking b 
	join package p where b.pack_id=p.pack_id and b.pack_id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
} 
?> 
        <!-- slider start-->    
            <div id="slider" class="owl-carousel owl-theme slider">      
            <div class="item"><img src="images/a13.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/a17.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/a9.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/a12.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/a.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/a11.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/a14.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/a15.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/a16.jpg" alt="Wedding couple just married"></div>
		</div>	
        
        <div class="find-section">
            <!-- Find search section-->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset- col-md-10">
                        <div class="">			  
                           <div class="col-md-8">
				<div class="side-box" id="inquiry">
                        <h2>Photographer Booking</h2>
                        <form  method="post">
                            <!-- Select Basic -->
                            <div class="default-calender">
                                <div class="form-group">
                                    <label class="control-label" for="weddingdate">choose your Date<span class="required">*</span></label>
                                    <div class="">
                                        <div class="input-group">
                                            <input type="date" name="booking_date"  class="form-control">
                                            <span class="input-group-addon" id="basic-addon2"></span> </div>
                                    </div>
                                </div>
                            </div>
							  <div class="payment-box">
                <div class="upper-box">
                    <!--Payment Options-->
               </div>
            </div>
            <?php 
				if(isset($_SESSION['user_name']))
				{
            ?>
            <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">Book My Order</button>
                            </div>
						<?php 
				} 
				else
				{ ?>
					<div class="form-group">
                        <button name="submit"  class="btn btn-primary btn-lg btn-block"><a href="registration.php">Book My Order</a></button>
                            </div>
						<?php
				} ?>				
				</form>
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if ( isset($_POST["booking_date"]))
							{ 
								$user_id=$_SESSION['user_name'];
								$booking_date=$_POST['booking_date'];
								$d = date("Y-m-d");						
								if($booking_date > $d)
								{								
									if($booking_date!='')
								{
									echo "value not null";
									$sql = "insert into booking(user_id,booking_date,photog_id,pack_id)	
									values('".$user_id."','".$booking_date."','".$id."','".$pid."')";
									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										echo "<meta http-equiv='refresh' content='0;mybooking.php'>";
									}
								}
								}
								else
								{
									echo "<span><h3 style='color:red'>PLZ ENTER VALID DATE</h3> </span>";
								}
							}
								else
								{
									echo "value not set";
								}
							}
				?>
				</div>
					</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Find search section-->
    </div>
   
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <!-- slider -->
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <!-- testimonial -->
    <script type="text/javascript" src="js/testimonial.js"></script>
    <!-- sticky header -->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
	
    <!-- testimonial -->
  
    <!-- sticky header -->
 
  
</body>
