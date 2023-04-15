<?php 
session_start();

if(isset($_SESSION["user_id"]))
{
$user_name = $_SESSION['user_id'];
}
else
{
	header("location:login.php");
}
?>

<!DOCTYPE html>

<html lang="en">


	<head>
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>CANDID CLICKS-ADMIN</title>
		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="shortcut icon" href="assets/images/avatars/icon2.png">
		<script src="assets/js/ace-extra.min.js"></script>
	</head>

	<body class="no-skin" >      
		<div id="navbar" class="navbar navbar-default      ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				<div class="col-md-3 col-sm-12 logo">
                    <div class="navbar-brand">
                       <a style="all:revert; text-decoration: none; color: #000000" href="index.php">
					   <div id="texts" style="white-space:nowrap;" alt="Wedding Vendors" class="img-responsive">
					   <img src="assets/images/avatars/icon2.png"><b>CANDID CLICKS</b>
					   </div></a> 
                    </div>
                </div>

				

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" height="500" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<span></span>
									
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
									<a href="..\..\candid clicks project\client\abc\wedding\wedding-new\index.php">
										<i class="ace-icon fa fa-globe" aria-hidden="true"></i>

										Visit Website
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
								
							</ul>
						</li>
						</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
				

			<div id="sidebar" class="sidebar   responsive   ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				
				
				
				<ul class="nav nav-list">
					<li class="active">
						<a href="homepage.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="user.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">User Table </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="categories.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Categories Table </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="subcategories.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Subcategories Table </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="photographer_page.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Photographer Table </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="booking.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Booking table </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="gallery.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Gallery Table </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="feedback.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Feedback Table </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					
					
					
					

					

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> Reports Pages </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						
						
						
						
						
						<ul class="submenu">
							
								<li class="">
								<a href="userreport.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User report
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="Reports/categories.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Categories report
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="Reports/feedback.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Feedback report
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="bookingreport.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Booking report
								</a>

								<b class="arrow"></b>
							</li>
							
							
						</ul>
					</li>

					
				</ul><!-- /.nav-list -->
				
				
				
				

				<!-- /.nav-list -->

				<div>
					<i id="sidebar-toggle-icon" ></i>
				</div>
			</div>
