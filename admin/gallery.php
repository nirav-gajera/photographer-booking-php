
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
							<li class="active">Gallery Table</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						
						</div><!-- /.ace-settings-container -->

						<!-- begin-->	
						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Gallery Tables
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<div class="col-xs-12">
                                      <div align="right"><a href="gallery_add.php">Add detail...</a></div>
								<div class="hr hr-18 dotted hr-double"></div>
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
											<tr>
												<th>Gallery id</th>
													<th>Gallery description</th>
													<th>Gallery img</th>
													<th>photog_id</th>
													<th>Action</th>
												</tr>
											</thead>
                                                <tbody>
											<?php
											$sql="Select * from gallery";
	
	                                        $result = mysqli_query($conn,$sql);
											 while($row = mysqli_fetch_array($result))
	                                      {
												$id=$row['gallery_id'];
											?>
													<tr>
													
													<td> <?php echo $row['gallery_id'] ?></td>
													<td><?php echo $row['gallery_description'] ?></td>
													<td><?php echo $row['gallery_img'] ?></td>
													<td><?php echo $row['photog_id'] ?></td>
													<td>
													
														<div class="hidden-sm hidden-xs btn-group">
														<a href="gallery_update.php?id=<?php echo $id?>">
															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>  </a>

															<a href="gallery_delete.php?id=<?php echo $id?>">
															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>  </a>
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

								

								

						
					<?php include('footer.php'); ?>									
