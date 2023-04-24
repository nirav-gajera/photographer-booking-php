
<?php 
include('header1.php');
require_once('../config/connection.php');
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
						    require_once('../config/connection.php');
						  $sql="select * from `booking` b join user u where b.User_id=u.user_id ";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {			
										$id=$row['booking_id'];
										$uid=$row['user_id'];
						  ?>
								<tr><td> <?php echo $row['booking_id'] ?></td>
													<td><?php echo $row['user_name'] ?></td>
													<td><?php echo $row['booking_date']?></td>
													<td> <?php
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
							?></td>
													<td><?php
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
							?></td>
												<td><br/> 
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

					<?php 
include('footer.php');

?>							

						
												
