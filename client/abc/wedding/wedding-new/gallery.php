<!DOCTYPE html>
<html lang="en">

<?php
include ('header.php'); 
require_once('../../../../config/connection.php');

 if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="select * from  gallery where categories_id='".$id."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="select * from  categories where categories_id='".$id."'";
$result=mysqli_query($conn,$sql);
$row4 = mysqli_fetch_array($result);
}

?>

<!-- Mirrored from abc/wedding/wedding-new/real-wedding-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:43:16 GMT -->

    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-newly-married-couple icon-white"></i>
                        </div>
                        <h1><?php echo $row4['categories_name']?> </h1>
                        <p ><?php echo $row4['categories_description']?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><?php echo $row4['categories_name']?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
    <div class="main-container">
        <div class="container">
            <div class="row">
											<?php
								 
								 


							$sql = "select * from gallery where categories_id='".$id."'";// limit 5 ;
							//echo $sql;
							//die;
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($result))
								
							
							{
							
												?>
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-img">
                            <a href="#"><img src="images/<?php echo $row['gallery_img']?>" alt="wedding vendor" class="img-responsive" width="495" height="370"></a>

                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title"><?php echo $row['gallery_description'] ?> </a></h2>
                           <!-- <p class="real-wed-meta"><span class="wed-day-meta"><i class="icon-wedding-day icon-size-18"></i> 5 june,2016</span>
                                <span class="wed-location-meta"> <i class="icon-wedding-location icon-size-18"></i> Surat, India</span>
                            </p>-->
                        </div>
						
                    </div>
					 </div>
					<?php } ?>
                    <!-- /.real wedding block -->
               
				
             
               </div>
            <!-- <div class="col-md-12 tp-pagination">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next"> <span aria-hidden="true">NEXT</span> </a>
                    </li>
                </ul>
            </div> -->
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
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
</body>


<!-- Mirrored from abc/wedding/wedding-new/real-wedding-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:43:17 GMT -->
</html>
