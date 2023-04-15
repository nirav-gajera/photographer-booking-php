
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
							<li class="active">Feedback Table</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						
						<!-- begin-->				<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									FEEDBACK Tables
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
												
													<th>Feedback id</th>
													<th>User name</th>
													<th>Feedback</th>
													<th>Feedback date</th>
													
												</tr>
											</thead>

											<tbody>
											
												
												
													<?php
											$sql="Select * from feedback f join user u where f.user_id=u.user_id";
											
	
	                                        $result = mysqli_query($conn,$sql);
											 while($row = mysqli_fetch_array($result))
	                                      {
												$id=$row['feedback_id'];
												
											?>
													<tr>
													
													<td> <?php echo $row['feedback_id'] ?></td>
													<td><?php echo $row['user_name'] ?></td>
													<td><?php echo $row['feedback']?></td>
													<td><?php echo $row['feedback_date']?></td>
													

													</tr>
												<?php 
												}
												?>

												
												
													
												

												
												

												


											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								

							<?php 
include('footer.php');

?>			
												
