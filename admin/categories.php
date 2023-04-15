


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
						

						<!-- begin-->				<div class="page-header">
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
												<div align="right"><h3><a href="categories_add.php">Add detail....</a></h3></div>
								<div class="hr hr-18 dotted hr-double"></div>




                <table id="simple-table" class="table  table-bordered table-hover">
											<thead>
											<tr><th>Categories id</th>
													<th>Categories name</th>
													<th>Categories descripition</th>
													<th  colspan="2">Action</th>
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
													<td>
													<div class="hidden-sm hidden-xs btn-group">
													<a href="categories_update.php?id=<?php echo $id?>">
															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button></a>
															</td>
															<td>
															<a href="categories_delete.php?id=<?php echo $id?>">
															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button> </a>
															</td></div>
														</td></tr>
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
								
								<!--<a href="categories_add.php">Add detail....</a>

								<div class="hr hr-18 dotted hr-double"></div>-->
								
						
							

								
	<?php include('footer.php'); ?>	