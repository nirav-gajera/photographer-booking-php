


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
							<li class="active">Categories Table</li>
						</ul><!-- /.breadcrumb -->
							
					</div>

					<div class="page-content">
						

						<!-- begin-->				
						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Categories Table
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
												
													<th>Categories id</th>
													<th>Categories name</th>
													<th>Categories descripition</th>
													
												</tr>
											</thead>

											<tbody>
											<?php
											$sql="Select * from categories";
	
	                                        $result = mysqli_query($conn,$sql);
											 while($row = mysqli_fetch_array($result))
	                                      {	
												$id=$row['categories_id'];
											?>
													<tr>
													
													<td> <?php echo $row['categories_id'] ?></td>
													<td><?php echo $row['categories_name'] ?></td>
													<td><?php echo $row['categories_description']?></td>
													</tr>
												<?php 
												}
												?>
												
																</div>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->
							<div class="hr hr-18 dotted hr-double"></div>
								
						
				<?php 
				include('footer.php');
				?>			

								

						
												
