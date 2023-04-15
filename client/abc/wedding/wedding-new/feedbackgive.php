<?php include("header.php");
//require_once('connection.php');
?>
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Contact Us</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Contact Us</li>
</ol>
</div>
</div>
</div>
</div>
</div>

<section id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-xs-12">

<form id="contactForm" method="POST" class="contact-form" data-toggle="validator">
<h2 class="contact-title">
Send Message Us
</h2>
<div class="row">
<div class="col-md-12">
<div class="row">
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" name="txtmessage" placeholder="Message" rows="7" data-error="Write your message" required></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
</div>
 </div>
<div class="col-md-12">
<button type="submit" id="submit" class="btn btn-common" 	">Submit Now</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="information mb-4">
<h3>Address</h3>
<div class="contact-datails">
<p>p1/101toran park, india colony, paliyad road, botad, gujarat.</p>
</div>
</div>
<div class="information">
<h3>Contact Info</h3>
<div class="contact-datails">
<ul class="list-unstyled info">
<li><span>Address : </span><p>p1/101toran park, india colony, paliyad road, botad, gujarat.</p></li>
<li><span>Email : </span><p><a href="#"><span class="__cf_email__" data-cfemail="cbb8bebbbba4b9bf8ba6aaa2a7e5a8a4a6">digalpatel2000@gmail.com</span></a></p></li>
<li><span>Phone : </span><p>9409929179 & 6356969194</p></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<?php //include("footer.php")?>
<?php
$id=$_SESSION['user_id'];
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
		
							 if (isset($_POST['btnfeedback'])) 
							 {
							if ( isset($_POST["txtmessage"]))
							{ 
								//$customername=$_POST["textname"];
								$message=$_POST["txtmessage"];
								$date=date('d-m-y');
								
														
								if($message!='')
								{
									echo "value not null";
									$sql = "insert into feedback(user_id,feedback,createddate)	
									values('".$id."','".$message."','".$date."')";
										
								
									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										echo "<meta http-equiv='refresh' content='0;givefeedback.php'>";
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
<?php include("footer.php");?>