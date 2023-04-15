
<?php 
include('header1.php');
require_once('../config/connection.php');

			$sql="select * from user ";	
			

			$flag=0;
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				
			
				if(isset($_POST["n1"]) && isset($_POST["n2"]))
				{
					$start = $_POST["n1"];
					$end = $_POST["n2"];
					
					$sql  = $sql . " and regidate between '".$start."' and '".$end."'";
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
							<li class="active">User Table</li>
						</ul><!-- /.breadcrumb -->
	<?php
				   
				if($flag==0)
				{
					$str = "Reports/index3.php";
				}
				else
				{
					$str = "Reports/index3.php?d1=$start&d2=$end";
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
									User Tables
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
											<tr>
												
													<th>User id</th>
													<th>User name</th>
													<th>Address</th>
													<th>Email id</th>
													<th>Password</th>
													<th>Contact no</th>
													<th>Action</th>
													
												</tr>
											</thead><tbody>
										
													<?php
											$sql="Select * from user";
	
	                                        $result = mysqli_query($conn,$sql);
											 while($row = mysqli_fetch_array($result))
	                                      {
												$id=$row['user_id'];
											?>
													<tr>
													
													<td> <?php echo $row['user_id'] ?></td>
													<td><?php echo $row['user_name'] ?></td>
													<td><?php echo $row['address']?></td>
													<td><?php echo $row['email_id']?></td>
													<td><?php echo $row['password']?></td>
													<td><?php echo $row['contact_no']?></td>
													<td>
														<a href="user_delete.php?id=<?php echo $id?>">
															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button> </a>
													</td>		
	
											
													</tr>
												<?php 
												}
												?>
												
												
												
												
</tbody>
</table>
									<!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								
	<?php include('footer.php'); ?>	
						
												
