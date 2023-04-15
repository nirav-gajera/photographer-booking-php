<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('../../../../config/connection.php');

if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="select * from sub_categories where sub_cat_id='".$id."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}

?>

<!-- Mirrored from abc/wedding/wedding-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:38:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Are you local weddding vendor provider & looking for wedding vendor website template. Wedding Vendor Responsive Website Template suitable for wedding vendor supplier, wedding agency, wedding company, wedding events etc.. ">
    <meta name="keywords" content="Wedding Vendor, wedding template, wedding website template, events, wedding party, wedding cake, wedding dress, wedding couple, couple, Wedding Venues Website Template">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CANDID CLICKS-CLIENT</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/icon2.png">
   
</head>

<body oncontextmenu="return false">

   
    <!-- /.top search -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                    <p>WELCOME TO CANDID CLICKS</p>
                </div>
                <div class="col-md-6 top-links">
                    <ul class="listnone">
					<?php 
						if(isset($_SESSION['user_name']))
						{
                     
					  ?>
					  
						 <!--<a href="logout.php">logout</a>-->
						 <?php 
						 } 
						 else
						 { ?>
								<li><a href="registration.php">registration</a></li>
									
								<li><a href="login1.php">Log in</a></li> 
								
								<?php } ?>
									 
					 </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo">
				<div class="navbar-brand">
                        <a style="all:revert; text-decoration: none; color: #000000" href="index.php">
                            <div id="texts" style="white-space:nowrap;" alt="Wedding Vendors">
                                <img src="images/icon3.png" /><b> Candid Clicks</b>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class=""><a href="index.php">Home</a>
                                
                            </li>
							   <li><a href="#">categories</a>
                                <ul>
                  
                            
								   
                                    <li><a href="#">wedding-photography</a>
                       <ul>
										
                    <li>
					<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=1";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
							$id=$row['sub_cat_id'];
						 ?>
                            
                                     <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                         </ul>   
                                    </li>
									  <li><a href="#" >engagement-photography</a>
                                        <ul>
										
                        <li>	<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=2 ";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
							$id=$row['sub_cat_id'];
						?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                        </ul>   
                                    </li>
									
									  <li><a href="#">pre-wedding-photography</a>
                                        <ul>
										
                    <li>	<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=3";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['sub_cat_id'];
						 ?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?></li>
                                        </ul>   
                                    </li>
									
									  <li><a href="#">wildlife-photography</a>
                                        <ul>
										
                                            <li>	<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=4";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['sub_cat_id'];
						 ?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                        </ul>   
                                    </li>
									
									  <li><a href="#">fashion-photography</a>
                                        <ul>
										
                                            <li>
											<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=6";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['sub_cat_id'];
						 ?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                        </ul>   
                                    </li>
									
									  <li><a href="#">sport-photography</a>
                                        <ul>
										
                                            <li>
											<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=8";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['sub_cat_id'];
						 ?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                        </ul>   
                                    </li>
									<li><a href="#">event-photography</a>
                                        <ul>
										
                                            <li>
											<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=10";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['sub_cat_id'];
						 ?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                        </ul>   
                                    </li>
									<li><a href="#">birthday-photography</a>
                                        <ul>
										
                                            <li>
											<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=11";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['sub_cat_id'];
						 ?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                        </ul>   
                                    </li>
									<li><a href="#">Jewellary-photography</a>
                                        <ul>
										
                                            <li>
											<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=12";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['sub_cat_id'];
						 ?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                        </ul>   
                                    </li>
									<li><a href="#">kids-photography</a>
                                        <ul>
										
                                            <li>
											<?php
					$sql="select * from sub_categories s
					    join categories c where s.categories_id=c.categories_id and s.categories_id=13";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['sub_cat_id'];
						 ?>
                            
                                    <li><a href="photographer-list.php?id=<?php echo $id ?>"><?php echo $row['sub_cat_name']?></a></li>
                                    <?php
									}
									?>
									</li>
                                        </ul>   
                                    </li>                   
                                    
                                </ul>
                            </li>
		
							<li><a href="">gallery</a>
                               <ul> <?php
					$sql="select * from categories ";
						 
						 $result=mysqli_query($conn,$sql);
						 while($row=mysqli_fetch_array($result))
						 {
						 $id=$row['categories_id'];
						 ?>
                            
                                    <li><a href="gallery.php?id=<?php echo $id ?>"><?php echo $row['categories_name']?></a></li>
                                    <?php
									}
									?>
								</ul>	
                            </li>
                            <li><a href="contact-us.php" title="Home" class="animsition-link">contact us</a>
                                
                            </li>
							
							<!--<li><a href="aboutus.php">About Us<br><span></span></a>
                            
								
                            </li>-->
							<?php if( isset($_SESSION['user_name']))  { ?>
                            <li><a href="mybooking.php">my booking</a>
							
                               
                            </li>
                           
                                 
                          <!--  <li><a href="#">Real Weddings</a>
                                <ul>
                                    <li><a href="gallery.php">Listing</a></li>
                                    <li><a href="real-wedding-single.html">Real Wedding Single</a></li>
                                </ul>
                            </li>-->
							
							
                               
                            </li>
							
							<!--<li><a href="aboutus.php">About Us<br><span></span></a>
                            
								
                            </li>-->
							<?php
							 
							 $id=$_SESSION['user_name'];
	
	                         $sql = "select * from user where user_id = '".$id."'";
							  
	//echo $sql;              
	//die;
	                      $result = mysqli_query($conn,$sql);
						  $row = mysqli_fetch_assoc($result);
	

 ?>
						
								
							
							<li><a href="profile.php">hello,<?php echo $row['user_name'] ?><br><span></span></a>
                            
								<ul>
								
                                    <li><a href="profile.php">profile</a></li>
                                    
									
									<li><a href="logout.php">logout</a></li>
                                </ul>
                            </li>
							<?php } ?>
							<li><a href="aboutus.php">About Us<br><span></span></a>
                            
								
                            </li>
							
                        </ul>
						
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    