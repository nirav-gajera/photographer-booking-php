<!DOCTYPE html>
<?php 

include('header.php');

require_once('../../../../config/connection.php');    
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="select * from booking where user_id='".$id."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result); 
 

}
   $id=$_SESSION['user_name'];
if(isset($_GET['id'])  && isset($_GET['name']));
	{	
		 
		
	$sql = "select * from user where user_id = '".$id."'";
	//echo $sql;
	//die;
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	}
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'kuldeeppatel1785@gmail.com'; //Business Email,
//https://developer.paypal.com/developer/accounts 
//login id :  sb-1sspc14085356@business.example.com
//id password : A#FG1cHq 

//$paypalID = 'digal.developer@gmail.com'; //Business Email, ahiya maru j reva deje, ok payment krvanu hoi tya developer valu acc nakhvanu hmm
 
 
 if(isset($_GET['bid']))
 {
	$id = $_GET['bid'];
	$s = "update booking set payment_status=2 where booking_id=$id";
		//echo $s;
		//die;
	$r = mysqli_query($conn,$s);
 }
?>
<html lang="en">


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/couple-budget.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:45:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wedding Vendor | Find The Best Wedding Vendors</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
   
    
    <div class="tp-dashboard-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 profile-header">
                    <div class="profile-pic col-md-2"><img src="images/46.jpg" alt="" class="img-circle"></div>
                    <div class="profile-info col-md-9">
                        <h1 class="profile-title"><?php echo $row['user_name'] ?><small>Welcome Back</small></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-dashboard-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 dashboard-nav">
                    <ul class="nav nav-pills nav-justified">
                        
                        <li class="active"><a href="#"><i class="fa fa-calculator db-icon"></i>My Booking</a></li>
                        
                    </ul>
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
                                    <h1>My Booking <small></small></h1>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="budget-board">
                <div class="list-group">
				
					
                    <div href="#" class="list-group-item active">
                        <div class="row">
							
						
                            <div class="col-md-2">Category </div>
							 <div class="col-md-2">Actual</div>
							 <div class="col-md-2">Payment Status</div>
							  <div class="col-md-2">Date</div>
                            <div class="col-md-2">Booking status</div>
                            
                            <div class="col-md-1">Pay Now</div>
                           
                           
                        </div>
                    </div>
	
                    
								
								<?php
								 
								 $id=$_SESSION['user_name'];


							$sql = "select * from booking b join  package p where b.pack_id= p.pack_id and user_id='".$id."'" ;
							//echo $sql;
							//die;
							
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($result))
							{
							$id=$row['user_id'];
							
							
							?>
 
			
                        <div class="list-group-item">
								<div class="row">
                           
						    <div class="col-md-2"><a class="#" data-toggle="collapse" href="#Ceremony" aria-expanded="false" aria-controls="Ceremony"></a> 
							
							<?php echo $row['pack_name']?>  </div>
							
                           <div class="col-md-2"><?php echo $row['pack_price']?> </div>
						   <div class="col-md-2">
						   
						   <?php
							if( $row['payment_status']==0)
							{
								echo "Pending";
							}
					
							else if($row['payment_status']==1)
								{
									echo "<h3 style='color:red'>Pending</h3>";
								}
								else if($row['payment_status']==2)
								{
									echo "<h3 style='color:#18F70D'>Successfully Done</h3>";
								}
							?>
							
								
								
							</div>
						   
						   <div class="col-md-2"><?php echo $row['booking_date']?> </div>
						   
                            <div class="col-md-2"> 
							<?php
							if( $row['booking_status']==0)
							{
								echo "Pending";
							}
					
							else if($row['booking_status']==1)
								{
									echo "<h4 style='color:#18F70D'>ACCEPTED</h4>";
								}
								else if($row['booking_status']==2)
								{
									echo "<h4 style='color:red'>REJECTED</h4>";
								}
							?>
							</div>
					<?php 
						if($row['booking_status']==1 && $row['payment_status']==0)
						{
					?>		
							 <form action="<?php echo $paypalURL; ?>" method="post">
    
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
       <!-- <input type="hidden" name="item_name" value="<?php echo $name; ?>">-->
		<input type="hidden" name="amount" value="<?php echo $row['pack_price']; ?>">
          <input type="hidden" name="currency_code" value="INR">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/demo/Paypal/cancel.php'>
		
        <input type='hidden' name='return' value='http://localhost/candid%20clicks%20project/client/abc/wedding/wedding-new/mybooking.php?bid=<?php echo $row['booking_id']?>'>
        
        <!-- Display the payment button. -->
		
        
		<input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" alt="PayPal-pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>
                         
						 <?php
						 
							}
						 ?>
                        </div>
						
                    </div>
                   
                    <?php } ?>
                   
                    
                   
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
  <!-- Footer -->
       
    <!-- /.Footer -->
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#hide").click(function() {
            $(".todo-form").hide(400);
        });
        $("#show").click(function() {
            $(".todo-form").show(400);
        });
    });
    </script>
</body>


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/couple-budget.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:45:43 GMT -->
</html>
	