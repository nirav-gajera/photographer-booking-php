<?php 
include('header1.php');
require_once('../config/connection.php');

			
			$sql="select * from booking b join user u where b.user_id=u.user_id ";	
			

			$flag=0;
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				
			
				if(isset($_POST["n1"]) && isset($_POST["n2"]))
				{
					$start = $_POST["n1"];
					$end = $_POST["n2"];
					
					$sql  = $sql . " and booking_date between '".$start."' and '".$end."'";
					$flag=1;
				}
					
			
			}
			
			$result=mysqli_query($conn,$sql);
			
			?>


			
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Booking Table</li>
						</ul><!-- /.breadcrumb -->
		
		 <?php
				   
				if($flag==0)
				{
					$str = "Reports/index2.php";
				}
				else
				{
					$str = "Reports/index2.php?d1=$start&d2=$end";
				}
			?>	
			
			<h4 style="text-align:right;"> <a href=<?php echo $str?>>Generate Reports</a> </h4>
              <h4 class="card-title">Reports </h4>
							<form align="center" method="POST">
							Start Date &nbsp&nbsp&nbsp <input type="Date" name="n1">
							End Date &nbsp&nbsp&nbsp <input type="Date" name="n2">
							<input type="submit" name="btn1" value="Submit">
							</form>

					</div>

					<div class="page-content">


						<!-- begin-->				<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Booking Table
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
											
											
												
												<tr>
												
													<th>Booking id</th>
													<th>User name</th>
													<th>Booking date</th>
													<th>Payment Status</th>
													<th>Booking status</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
											<?php
						   
						  while ($row=mysqli_fetch_array($result))
						  {			
										$id=$row['booking_id'];
										$uid=$row['user_id'];
						  
						  
						  ?>
								<tr>
													
													<td> <?php echo $row['booking_id'] ?></td>
													<td><?php echo $row['user_name'] ?></td>
													<td><?php echo $row['booking_date']?></td>
													<td><?php echo $row['payment_status']?></td>
													<td><?php echo $row['booking_status']?></td>
												<td>	
													
								<br/> 
							<?php	
								if($row['booking_status']==0)
								{		
							?>
									<a href="booking_accept.php?id=<?php echo $id?>&uid=<?php echo $uid?>" style="color:#18F70D;cursor:pointer" > ACCEPT </a> &nbsp; 
									<a href="booking_reject.php?id=<?php echo $id?>&uid=<?php echo $uid?>" style="color:red;cursor:pointer"> REJECT </a> 
									
							<?php
								}
								else if($row['booking_status']==1)
								{
									echo "<h6 style='color:#18F70D'>ACCEPTED</h6>";
								}
								else if($row['booking_status']==2)
								{
									echo "<h6 style='color:red'>REJECTED</h6>";
								}
							?>
								</td>
                          </tr>
                          
							<?php }?>
												
												
												</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								
	<?php include('footer.php'); ?>	
						
												
