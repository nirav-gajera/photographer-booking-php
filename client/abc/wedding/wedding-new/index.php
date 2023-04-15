<?php
include ('header.php'); 
require_once('../../../../config/connection.php');
$sql="select * from photographer_page";
$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from abc/wedding/wedding-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:38:32 GMT -->
<div class="slider-bg">
        <!-- slider start-->
        <div id="slider" class="owl-carousel owl-theme slider">
           
		    <div class="item"><img src="images/2.jpg" alt="Wedding couple just married"></div>
            <div class="item"><img src="images/15.jpg" alt="Wedding couple just married"></div>
            <div class="item"><img src="images/13.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/24.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/14.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/16.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/12.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/18.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/19.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/17.jpg" alt="Wedding couple just married"></div>
			<div class="item"><img src="images/1.jpg" alt="Wedding couple just married"></div>
		<!--	<div class="item"><img src="images/gold.jpg" alt="Wedding couple just married"></div>-->
			<div class="item"><img src="images/23.jpg" alt="Wedding couple just married"></div>
			
			
        </div>

        <div class="find-section">
            <!-- Find search section-->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 finder-block">
                        <div class="finder-caption">
                            <h1>Find your perfect photographer</h1>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Find search section-->
    </div>
    <!-- slider end-->
    <div class="section-space80">
        <!-- Feature Blog Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Your Wedding Planing Start Here</h1>
                        <p>Various versions have evolved over the years sometimes by accident sometimes on purpose.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feature center -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
                        <div class="feature-icon"><a href="photographer-list.php"><img src="images/vendor.svg" alt=""></div>
                        <h2>Find local photographer</h2></a>
                        <p>Find the best professional photographers for weddings, birthdays, fashion, and special events from photographers.</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">   
                        <!-- feature block -->
                        <div class="feature-icon"><a href="contact-us.php"><img src="images/mail.svg" alt=""></div>
                        <h2>Contact photographer</h2></a>
                        <p>if you want to any type of help,contact our team.</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-4">
                    <div class="feature-block feature-center">
                        <!-- feature block -->
						<?php 
						if(isset($_SESSION['user_name']))
						{
                     
					  ?>
					  
						 <div class="feature-icon"><a href="mybooking.php"><img src="images/couple.svg" alt=""></div>
                        <h2> Your Date</h2></a>
                        <p> view the status and details of your online booking.</p>
						 <?php 
						 } 
						 else
						 { ?>
								<div class="feature-icon"><a href="registration.php"><img src="images/couple.svg" alt=""></div>
                        <h2> Your Date</h2></a>
                        <p>Please sign in to view the status and details of your online booking.</p>
								
								<?php } ?>
						

                    </div>
                </div>
                <!-- /.feature block -->
            </div>
            <!-- /.feature center -->
        </div>
    </div>
    <!-- Feature Blog End -->
    <div class="section-space80 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Featured photographer</h1>
                        
                    </div>
                </div>
            </div>

            <div>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-4">
                  <div class="vendor-box">
                        <div class="vendor-image">
                            <!-- vendor pic -->
                            <a href="photographerdetail.php?id=<?php echo $row['photog_id']?>">
								<?php
									if($row['img']=="")
									{
										//echo "ff";
										echo '<img src="images/default_profile.png" alt="wedding vendor" class="img-responsive" width="500">';
									}
									else
									{
										
								?>
								<img src="images/<?php echo $row['img']?>" alt="wedding vendor" class="img-responsive" width="500">
									<?php } ?>
							</a>
                            <!--<div class="feature-label"></div>-->
                            <!--<div class="favourite-bg"><a href="#" class=""><!--<i class="fa fa-heart"></i></a></div>-->
                        </div>
					 <div class="vendor-detail">
                            <!-- vendor details -->
                            <div class="caption">
                                <!-- caption -->
                                <h2><a href="photographerdetail.php?id=<?php echo $row['photog_id']?>" class="title"><?php echo $row['photog_name']?></a></h2>
                                <p class="location"><i class="fa fa-map-marker"></i><?php echo $row['address']?></p>
                               <!-- <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(1)</span> </div>-->
                            </div>
                            <!-- /.caption -->
                        </div>
                        <!-- vendor details -->
                    </div>
                </div>
                <?php } ?>
			</div>			
                <!-- /.vendor box start-->
               
    <div class="section-space80">
        <!-- top location -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>On 	Top Photography</h1>
                        <p>Most demanded photography listing</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/sa13.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">wedding</span></a> </div>
                </div>
                <!-- /.location block -->
                <div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/sa14.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">engagment</span></a> </div>
                </div>
				 <div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/sa6.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">pre-wedding</span></a> </div>
                </div>
                <!-- /.location block -->
                
                <!-- /.location block -->
                <div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/sa10.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">wildlife</span></a> </div>
                </div>
				<div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/sa8.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">fashion</span></a> </div>
                </div>
                <!-- /.location block -->
                <div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/sa2.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">sport</span></a> </div>
                </div>
				<div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/sa9.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">event</span></a> </div>
                </div>
				<div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/sa3.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">birthday</span></a> </div>
                </div>
				<div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/gold.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">jewellary</span></a> </div>
                </div>
				<div class="col-md-6 location-block">
                    <!-- location block -->
                    <div class="vendor-image">
                        <a href="#"><img src="images/baby5.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Kids</span></a> </div>
                </div> 
                <!-- /.location block -->
            </div>
        </div>
    </div>
    <!-- /.top location -->
    <div class="section-space80 bg-light">
        <!-- Testimonial Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>feedback</h1>
                        <p>We need more feedback from the consumer in order to improve our goods.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 tp-testimonial">
                    <div id="testimonial" class="owl-carousel owl-theme">
					
					<?php
					$sql="select * from feedback f 
					     join user u where f.user_id=u.user_id";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 ?>
					                    <div class="item testimonial-block">
                            <div class="couple-pic"><img src="images/c9.jfif" alt="" class="img-circle"></div>
                            <div class="feedback-caption">
                                 <?php echo $row['feedback']?>
                            </div>
                            <div class="couple-info">
                                <div class="name"> <?php echo $row['user_name']?></div>
                                <div class="date"><?php echo $row['feedback_date']?></div>
                            </div>
                        </div>
						
						<?php
						}
						?>
						
						
						
						

						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Testimonial Section -->
    
    <!-- /. Call to action -->
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
                        <!--<li><a href="#">News</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>-->
                    </ul>
                </div>
                <div class="col-md-4 newsletter">
                    
                    <div class="social-icon">
                        <h2>Be Social &amp; Stay Connected</h2>
                        <ul>
                            <li><a href="https://www.facebook.com/candid_clicks.photostudio.7"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="https://www.facebook.com/candid_clicks.photostudio.7"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="https://hangouts.google.com"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="https://www.facebook.com/candid_clicks.photostudio.7"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/candid_clicks.photostudio.7"><i class="fa fa-flickr"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Footer -->
    
        <!-- Tiny footer -->
      
    <!-- /. Tiny Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
</body>


<!-- Mirrored from abc/wedding/wedding-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:39:41 GMT -->
</html>

