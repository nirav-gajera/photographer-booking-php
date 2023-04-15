
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
								<a href="homepage.php">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Subcategories Table</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					

								<div class="pull-left width-50">
								</div>
						<!-- begin-->		

						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									subcategories Tables
								</small>
							</h1>
						</div><!-- /.page-header -->
</div>
						<div >
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<div>
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
											<tr>
												
													<th>Sub categories id</th>
													<th>Categories name</th>
													<th>Sub categories name</th>
													<th>Sub categories description</th>
													
													
												</tr>
											</thead>

											<tbody>
											
												
												
													<?php
											//$sql="Select * from sub_categories";
											$sql = "select * from `sub_categories` s join categories c where s.categories_id=c.categories_id";
											
	
	                                        $result = mysqli_query($conn,$sql);
											 while($row = mysqli_fetch_array($result))
	                                      {	
												$id=$row['sub_cat_id'];
												$name=$row['categories_name'];
											?>
													<tr>
													<td> <?php echo $row['sub_cat_id'] ?></td>
													<td> <?php echo $row['categories_name'] ?></td>
													<td><?php echo $row['sub_cat_name'] ?></td>
													<td><?php echo $row['sub_cat_description']?></td>
													
													
													
													

														</div>							
						  <?php
						  }
						  ?>
											
														</div>
													 
													</tr>
												</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->
								
								

								<div class="hr hr-18 dotted hr-double"></div>

								

						
												
				<?php 
include('footer.php');

?>