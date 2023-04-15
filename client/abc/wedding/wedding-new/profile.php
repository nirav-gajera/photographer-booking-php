<?php

require_once('../../../../config/connection.php');
include('header.php');



	$id=$_SESSION['user_name'];
	
	if(isset($_GET['id'])  && isset($_GET['name']));
	{	
		
		
	$sql = "select * from user where user_id = '".$id."'";
	//echo $sql;
	//die;
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	}

 ?>

<!DOCTYPE html>
<html lang="en">


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
                       <!-- <li><a href="couple-dashboard.html"><i class="fa fa-dashboard db-icon"></i>My Dashboard</a></li>
                        <li><a href="couple-wishlist.html"><i class="fa fa-heart db-icon"></i>My Wishlist </a></li>
                        <li><a href="couple-checklist.html"><i class="fa fa-list db-icon"></i>My Checklist</a></li>
                        <li><a href="couple-budget.html"><i class="fa fa-calculator db-icon"></i>My Budget</a></li>
                        <li><a href="couple-guestlist.html"><i class="fa fa-users db-icon"></i>My Guest List</a></li>-->
                        <li class="active"><a href="couple-profile.html"><i class="fa fa-user db-icon"></i>My Profile</a></li>
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
                                    <h1>Account Details <small>Change your personal profile and wedding details</small></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                               <!-- <div class="action-block"> <a href="#" class="btn btn-default">BUtton</a> </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 profile-dashboard">
                    <div class="row">
                        <div class="col-md-7 dashboard-form calender">
                            <form class="form-horizontal" method="post">
                                <div class="bg-white pinside40 mb30">
                                    <!-- Form Name -->
                                    <h2 class="form-title">Personal detail</h2>
                                   
                                    <!-- Text input-->
                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name"><strong>Name:</strong></label>
                                        <div class="col-md-8">
										<span ><?php echo $row['user_name']?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name"><b>Address:</b></label>
                                        <div class="col-md-8">
                                            
											<span ><?php echo $row['address']?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name"><b>Email:</b></label>
                                        <div class="col-md-8">
                                            
											<span ><?php echo $row['email_id']?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name"><b>contact no:</b></span></label>
                                        <div class="col-md-8">
                                            
											<span ><?php echo $row['contact_no']?></span>
                                        </div>
                                    </div>
                                 
                                    
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 dashboard-form">
                            <form class="form-horizontal" method="post">
                                <div class="bg-white pinside30">
                                    <!-- Form Name -->
                                    <h2 class="form-title">update Detail</h2>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Name</label>
                                        <div class="col-md-8">
									<input id="name" name="user_name" type="text"  class="form-control input-md" 
									value="<?php echo $row['user_name']?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Address</label>
                                        <div class="col-md-8">
                                            <input id="name" name="address" type="text" 
											value="<?php echo $row['address']?>"  class="form-control input-md">
											
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Email</label>
                                        <div class="col-md-8">
                                            <input id="name" name="email_id" type="text" 
											value="<?php echo $row['email_id']?>"  class="form-control input-md">
											
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">contact no</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="contact_no" type="text" 
											value="<?php echo $row['contact_no']?>"  class="form-control input-md" >
											
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-4 control-label" for="name">password</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="password" type="text" 
											value="<?php echo $row['password']?>"  class="form-control input-md" >
											
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="submit" name="submit" type="submit" class="btn btn-primary btn-lg">update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- /.Footer -->
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["user_name"]) && isset($_POST["email_id"]) && isset($_POST["address"]) && isset($_POST["contact_no"]) && isset($_POST["password"]))
		{
			$user_name=$_POST["user_name"];
			$email_id=$_POST["email_id"];
			$address=$_POST["address"];
			$contact_no=$_POST["contact_no"];
			$password=$_POST["password"];
			
							
			if(($user_name!='') && ($email_id!='') && ($address!='') && ($contact_no!='') && ($password!=''))
			{				
				$sql="update user set user_name='".$user_name."',email_id='".$email_id."',address='".$address."' ,contact_no='".$contact_no."' 
				,password='".$password."' where user_id = '".$id."'";
		//echo $sql;
		//die;
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=profile.php'>";

				}
			}
			else
			{
					echo "Value is null";
			}
		}
		else
		{
				echo "Value not set";
		}
}

?>	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script src="../../../code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="js/date-script.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
</body>


<!-- Mirrored from abc/wedding/wedding-new/couple-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2019 06:45:43 GMT -->
</html>
