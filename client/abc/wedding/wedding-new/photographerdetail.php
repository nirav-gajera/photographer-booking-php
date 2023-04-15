<!DOCTYPE html>
<html lang="en">
<?php

include ('header.php');

if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="select * from photographer_page where photog_id=photog_id ";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$sql_photo="select * from gallery where photog_id='$id' ";
$result_photo=mysqli_query($conn,$sql_photo);
}

?>


    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <h1>Photographer detail</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">photographer </a></li>
                        <li class="active"> </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container tabbed-page st-tabs">
            <div class="row tab-page-header">
			 <?php
					$sql="select * from photographer_page 
					      where photog_id='".$id."' ";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 ?>    
			
			
                <div class="col-md-8 title"> <a href="#"><h1><?php echo $row['photog_name']?></h1></a>
                    <!--<h1>Candid Clicks</h1>-->
                    <p class="location"><i class="fa fa-map-marker"></i><?php echo $row['address']?></p>
                    
                   <!-- <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div> -->
                </div>
					
					<?php
						}
						?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#photo" title="Gallery" aria-controls="photo" role="tab" data-toggle="tab">
							<i class="fa fa-photo"></i> <span class="tab-title">Photo</span></a>
                        </li>
						  <li role="presentation">
                            <a href="#pricing" title="pricing" aria-controls="pricing" role="tab" data-toggle="tab"> 
							<i class="fa fa-photo"></i> <span class="tab-title">packages</span></a>
						 </li>
						<li role="presentation">
                            <a href="#about" title="about info" aria-controls="about" role="tab" data-toggle="tab">
                                <i class="fa fa-info-circle"></i>
                                <span class="tab-title">About</span>
                            </a>
                        </li>
               
                        <li role="presentation">
                            <a href="#reviews" title="Review" aria-controls="reviews" role="tab" data-toggle="tab"> <i class="fa fa-commenting"></i> <span class="tab-title">Reviews</span></a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
					
                        <!-- tab content start-->
                        
						
						
						<div class="tab-content">
					
                        <!-- tab content start-->
						
						<center>
                        <div role="tabpanel" class="tab-pane fade in active" id="photo">
                               
                            </div>
                        
                            <div id="sync2" class="owl-carousel">
                                <?php while($row_photo = mysqli_fetch_assoc($result_photo)) { ?>
                                    <div class="item"> <img src="images/<?php echo $row_photo['gallery_img']?>" alt="" class="img-responsive"> </div>
                                <?php } ?>

                            </div>
							</center>
                        </div>
						
						
						
						 <div role="tabpanel" class="tab-pane fade in active" id="pricing">
					
                        <h1>Pricing Table</h1>
          
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Pricing Table</li>
                    </ol>
                </div>       
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row pricing-container">
			
								 <?php
					$sql="select * from package 
					where pack_id=pack_id  ";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						$pid=$row['pack_id'];
						$pack_price=$row['pack_price'];
						 ?>
                <div class="col-md-10 pricing-box pricing-box-regualr">
                    <div class="well-box">
					    <img src="images/<?php echo $row['pack_img']?>">
                        <h1 class="price-title"><?php echo $row['pack_name']?></h1>
                        <h1 class="price-plan"><?php echo $row['pack_price']?><span class="permonth">/once</span></h1>
                        <p><?php echo $row['pack_des']?></p>
						
                        <a href="booking.php?id=<?php echo $id ?>&pid=<?php echo $pid?>&pack_price=<?php echo $pack_price?>" class="btn btn-default btn-sm">Select Plan</a> </div>
                  
                </div>
				
				<?php
				}
				?>
				
               
            </div>
            
           
         
   
    </div>
    </div>


	</div>
                       
					   <div role="tabpanel" class="tab-pane fade" id="about">
						<?php
							$sql="select * from photographer_page 
							where photog_id='".$id."'  ";
						 
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
						 {
						 ?>   
			
			
						
                            <div class="venue-details">
                                <h2>photographer Details</h2>
								<img src="images/<?php echo $row['img']?>"><br>
                               <?php echo $row['about']?><br>
							   <?php echo $row['email_id']?>
                            </div>
							<?php
							}
							?>
                        </div>
                        
                       
						
                        <div role="tabpanel" class="tab-pane fade" id="reviews">
                            <!-- comments -->
                            <div class="customer-review">
							
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>Couples Review</h1>
										
										
										
                                        <div class="review-list">
                                            <!-- First Comment -->
                                      
                                          <?php
							$sql="select * from feedback f 
							where photog_id='".$id."'";
						 
							$result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 ?>   
										   <div class="row">
                                                <div class="col-md-2 col-sm-2 hidden-xs">
                                                    <div class="user-pic"> <img class="img-responsive img-circle" src="images/user.jpg" alt=""> </div>
                                                </div>
                                                <div class="col-md-10 col-sm-10">
												
                                                    <div class="panel panel-default arrow left">
                                                        <div class="panel-body">
                                                            <div class="text-left">
														
															<?php echo $row['feedback']?>
                                                                
                                                              <!--  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div> -->
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											<?php
											}
											?>
                                            <!-- Second Comment -->
                                     
                                            <!-- Third Comment -->
                                          
                                        </div>
				 
				        <div class="review"> <a class="btn tp-btn-primary btn-block tp-btn-lg" role="button" data-toggle="collapse" href="#review" aria-expanded="false" aria-controls="review"> Write A Review </a> 
						
						</div>
                                        <div class="collapse review-list review-form" id="review">
						
										
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <h1>Write Your Review</h1>
                                                    <form class="" method="post">
                                                        
                                                        <!-- Text input-->
                                                     
                                                        <!-- Textarea -->
                                                        <div class="form-group">
                                                            <label class=" control-label" >Write Review</label>
                                                            <div class="">
                                                                <textarea class="form-control" name="message" rows="8"></textarea>
                                                            </div>
                                                        </div>
														
														
														
                                                        <!-- Button -->
                                                        <div class="form-group">
                                                            <button name="submit" type="submit"class="btn tp-btn-default tp-btn-lg">Submit Review</button>
                                                        </div>
                                                    </form>
													
													
													 <?php

						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
		
							 if (isset($_POST['message'])) 
							 {
							if ( isset($_POST["message"]))
							{ 
								//$customername=$_POST["textname"];
                                 $user_id=$_SESSION['user_name'];
						
								$message=$_POST["message"];
								$date=date('y-m-d');
						
														
								if($message!='')
								{
									echo "value not null";
									$sql = "insert into feedback(user_id,feedback,feedback_date,photog_id)	
									values('".$user_id."','".$message."','".$date."','".$id."')";
								
									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										echo " <script>
													  alert('Thank You...For Review...!');
													  window.location='index.php';
													  </script>";
									}
								}
							}
								else
								{
									echo "value not set";
								}
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
                    </div>
                    <!-- /.tab content start-->
                </div>
            </div>
         <!--  
              
            </div>
        </div>
    </div>

    <!-- /.Footer -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/thumbnail-slider.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    var myCenter = new google.maps.LatLng(23.0203458, 72.5797426);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 9,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,

            icon: 'images/pinkball.png'
        });

        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
            content: "Hello Address"
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script type="text/javascript" src="js/price-slider.js"></script>
    <script>
    $(function() {
        $("#weddingdate").datepicker();
    });
    </script>
</body>


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/vendor-details-tabbed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:42:12 GMT -->
</html>
