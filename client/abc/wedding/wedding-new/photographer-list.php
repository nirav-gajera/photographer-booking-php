<!DOCTYPE html>
<html lang="en">
<?php

include ('header.php'); 

require_once('../../../../config/connection.php');
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="select * from photographer_page where photog_id='".$id."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="select * from sub_categories where sub_cat_id='".$id."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}


?>

<!-- Mirrored from abc/wedding/wedding-new/photography-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:42:20 GMT -->

    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Wedding Photographer Listings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	 <div class="main-container">
        <div class="container">
		<div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="page-title">
								<i class="fa fa-camera" aria-hidden="true"></i>
								For
							<?php echo $row['sub_cat_name'] ?> 
                                     <h1>Choose Your Photographer <small></small></h1>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
          <div class="col-md-12">
			  <div class="row">
								 <?php
					$sql="select * from photographer_page 
					      ";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
		                  $id=$row['photog_id'];

						 ?>    
                <div class="col-md-4">
                  <div class="vendor-box">
                        <div class="vendor-image">
                            <!-- vendor pic -->
                            <a href="photographerdetail.php?id=<?php echo $id ?>"><img src="images/<?php echo $row['img']?>" alt="wedding vendor" class="img-responsive" width="500"></a>
                            <!--<div class="feature-label"></div>-->
                            <!--<div class="favourite-bg"><a href="#" class=""><!--<i class="fa fa-heart"></i></a></div>-->
                        </div>
					 <div class="vendor-detail">
                            <!-- vendor details -->
                            <div class="caption">
                                <!-- caption -->
                                <h2><a href="photographerdetail.php?id=<?php echo $id ?>" class="title"> <?php echo $row['photog_name']?></a></h2>
                                <p class="location"><i class="fa fa-map-marker"></i><?php echo $row['address']?></p>
                               <!-- <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(1)</span> </div>-->
                            </div>
                            <!-- /.caption -->
                           
						   
                        </div>
					
                        <!-- vendor details -->
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

    <!-- /.Footer -->
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
    <script src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script type="text/javascript" src="js/price-slider.js"></script>
</body>


<!-- Mirrored from abc/wedding/wedding-new/photography-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:42:20 GMT -->
</html>
