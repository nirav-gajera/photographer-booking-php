
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
													<th>Action</th>
												</tr>
											</thead>

											<tbody><?php
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
													<td>
													<div class="hidden-sm hidden-xs btn-group">
														<a href="feedback_delete.php ?id=<?php echo $id?>">
															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button> </a>
                                                            </div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>

													</tr>
												<?php 
												}
												?>

												
												
													
												

												
												

												


											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								

							<?php include('footer.php'); ?>	
												
