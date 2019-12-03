 <?php
session_start();
if (isset($_SESSION['log'])) 
{
?>
<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Student Scholarship</title>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="author" content="Phoenixcoded" />

	<link rel="icon" href="images/favicon.jpg" type="image/x-icon">
	<script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
	<script type="text/javascript" src="files/assets/js/pace.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

	<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

	<link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome-n.min.css">

	<link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

	<link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a href="index.php">
							<img class="img-fluid" src="images/favicon.jpg" alt="Theme-Logo" />
						</a>
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="fa fa-bars"></i>
						</a>
						<a class="mobile-options waves-effect waves-light">
							<i class="fa fa-sign-out"></i>
						</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<a href="#" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
									<i class="fa fa-desktop"></i>
								</a>
							</li>

						</ul>
						<ul class="nav-right">


							<li class="header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-sign-out"></i>
										<span class="badge bg-c-red">5</span>
									</div>
									<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
										<li>
											<a href="index.php"><i class="fa fa-sign-out"> Logout</i></a>
										</li>


									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>



			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">

					<nav class="pcoded-navbar">
						<div class="nav-list">
							<div class="pcoded-inner-navbar main-menu">
								<div class="pcoded-navigation-label">Navigation</div>
								<ul class="pcoded-item pcoded-left-item">
									<li class="">
										<a href="dashboard.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-home"></i>
											</span>
											<span class="pcoded-mtext">Dashboard</span>
										</a>
									</li>
									<li class="">
										<a href="student.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-user"></i>
											</span>
											<span class="pcoded-mtext">Student Scholarship</span>
										</a>
									</li>
									<li class="">
										<a href="biogas.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-fire"></i>
											</span>
											<span class="pcoded-mtext">Biogas Scholarship</span>
										</a>
									</li>
									<li class="">
										<a href="solar.php" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-sun-o"></i>
											</span>
											<span class="pcoded-mtext">Solar Scholarship</span>
										</a>
									</li>
									<li class="pcoded-hasmenu">
										<a href="javascript:void(0)" class="waves-effect waves-dark">
											<span class="pcoded-micon">
												<i class="fa fa-credit-card"></i>
											</span>
											<span class="pcoded-mtext"> Reports </span>
										</a>
										<ul class="pcoded-submenu">
											<li class=" ">
												<a href="student_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>  Student Report  
												</a>
											</li> 
											<li class=" ">
												<a href="biogas_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>  Biogas Report
												</a>
											</li>
											<li class=" ">
												<a href="solar_report.php" class="waves-effect waves-dark">
													<i class="fa fa-angle-right"></i>   Solar Report 
												</a>
											</li>  

										</ul> 
									</li>
								</ul>
							</div>
						</div>
					</nav>

					<div class="pcoded-content">

						<div class="page-header">
							<div class="page-block">
								<div class="row align-items-center">
									<div class="col-md-12">
										<div class="page-header-title">
											<h4 class="m-b-10">Student Scholarship</h4>
										</div>

										<ul class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="dashboard.php">
													<i class="fa fa-home"></i> Dashboard
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">

									<div class="page-body">
										<div class="card">
											<div class="card-header">
												<h5>Student Scholarship</h5>
											</div>

											<div class="card-block">
												<div class="table-responsive dt-responsive">
													<table id="dom-jqry" class="table table-striped table-bordered nowrap">
														<thead>
															<tr>
																<th>S.No</th>
																<th>Student Scholarship</th>
																<th>Farmers Name</th>
																<th>DOB</th> 
																<th>Student Age</th>
                                                                <th>Student Aadhar</th>
																<th>Student Contact</th>
																<th>Address</th>
																<th>Religion</th>
																<th>Cast</th>
																<th>Bank Account</th>
																<th>Student Year</th>
																<th>Student Address</th>
																<th>Student Image</th>
																<th>Amount</th>
																<th>Action</th>
																<th>Print</th>
															</tr>
														</thead>
														<tbody>
															<?php  $sno="1";
															 $query=mysqli_query($conn,"select * from student_scholarship ORDER BY id DESC");
                                                              while($row=mysqli_fetch_array($query)){
  																$id=$row['id']; 
																$student_name=$row['student_name'];
																$farmers_name=$row['farmers_name'];
																$dob=$row['dob']; 
																$student_age=$row['student_age'];
																$student_aadhar=$row['student_aadhar'];
																$student_contact=$row['student_contact'];
																$address=$row['address'];
																$religion=$row['religion'];
																$cast=$row['cast'];
																$bank_account=$row['bank_account'];
																$student_year=$row['student_year'];
																$student_address=$row['student_address'];
																$profile_image=$row['profile_image'];
                                                                $amount=$row['amount'];
																?>
																<tr>
																	<td><?php echo $sno;$sno=$sno+1;?></td>
																	<td><?php echo $student_name;?></td>
																	<td><?php echo $farmers_name;?></td>
																	<td><?php echo $dob;?></td> 
																	<td><?php echo $student_age;?></td>
																	<td><?php echo $student_aadhar;?></td>
																	<td><?php echo $student_contact;?></td>
																	<td><?php echo $address;?></td>
																	<td><?php echo $religion;?></td>
																	<td><?php echo $cast;?></td>
																	<td><?php echo $bank_account;?></td>
																	<td><?php echo $student_year;?></td>
																	<td><?php echo $student_address;?></td>
																	<td>
													                        <img src='../upload_2/<?php echo $row['profile_image'];?>' width="100px">
													                  </td> 
																	<td><?php echo $amount;?></td>
																	<td>
																		<a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#<?php echo $id;?>">Update</a> 
																	</td>
																	<td>
																		 <form action="student_report_print.php" method="post" target="_blank">
 
 													                      <button type="submit" name="sales_report" class="btn btn-success">Print</button>
													                    </form>  
													                </td>

																</tr>
																<div class="modal fade" id="<?php echo $id;?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																	<div class="modal-dialog">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title">Edit</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<div class="modal-body">
																				<form role="form" method="post" action="process.php">
																					<input type="hidden" class="form-control" value="<?php echo $id;?>" name="id">
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Student Name</label>
																						<input type="text"   class="form-control"  value="<?php echo $student_name;?>" name="student_name" id="exampleInput">
																					</div>  
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Farmers Name</label>
																						<input type="text"   class="form-control"  value="<?php echo $farmers_name;?>" name="farmers_name" id="exampleInput_2">
																					</div> 
																					<div class="form-group col-md-12">
																						<label for="exampleInput">DOB</label>
																						<input type="text"   class="form-control"  value="<?php echo $dob;?>" name="dob" id="exampleInput_3">
																					</div>  
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Student Age</label>
																						<input type="text"   class="form-control"  value="<?php echo $student_age;?>" name="student_age" id="exampleInput_4">
																					</div>     
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Student Aadhar</label>
																						<input type="text"   class="form-control"  value="<?php echo $student_aadhar;?>" name="student_aadhar" id="exampleInput_5">
																					</div>
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Student Contact</label>
																						<input type="text"   class="form-control"  value="<?php echo $student_contact;?>" name="student_contact" id="exampleInput_12">
																					</div>  
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Address</label>
																						<input type="text"   class="form-control"  value="<?php echo $address;?>" name="address" id="exampleInput_11">
																					</div>  
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Religion</label>
																						<input type="text"   class="form-control"  value="<?php echo $religion;?>" name="religion" id="exampleInput_6">
																					</div>  
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Cast</label>
																						<input type="text"   class="form-control"  value="<?php echo $cast;?>" name="cast" id="exampleInput_7">
																					</div>  
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Bank Account</label>
																						<input type="text"   class="form-control"  value="<?php echo $bank_account;?>" name="bank_account" id="exampleInput_8">
																					</div>  
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Student Year</label>
																						<input type="text"   class="form-control"  value="<?php echo $student_year;?>" name="student_year" id="exampleInput_9">
																					</div>  
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Student Address</label>
																						<input type="text"   class="form-control"  value="<?php echo $student_address;?>" name="student_address" id="exampleInput_10">
																					</div>
																					<div class="form-group col-md-12">
																						<label for="exampleInput">Amount</label>
																						<input type="text"   class="form-control"  value="<?php echo $amount;?>" name="amount" id="exampleInput_22" readonly>
																					</div>  
																					 
																				</div>
																				<div class="modal-footer">
																					<button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c" type="submit"  name="edit_detail" ><i class="fa fa-refresh"></i> Update</button>
																					<button class="btn btn-danger btn-ef btn-ef-3 btn-ef-3c" type="submit"  name="delete_detail" ><i class="fa fa-trash"></i> Delete</button>
																				</form> 

																				<button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
																			</div>

																		</div>
																	</div>
																</div> 
															<?php  } ?> 
														</tbody>
														<tfoot>
															<tr>
																<th>S.No</th>
																<th>Student Scholarship</th>
																<th>Farmers Name</th>
																<th>DOB</th> 
																<th>Student Age</th>
																<th>Student Aadhar</th>
																<th>Student Contact</th>
																<th>Address</th>
																<th>Religion</th>
																<th>Cast</th>
																<th>Bank Account</th>
																<th>Student Year</th>
																<th>Student Address</th>
																<th>Student Image</th>
																<th>Amount</th>
																<th>Action</th>
															</tr>
														</tfoot>
													</table>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>





	<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
	<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>

	<script src="files/assets/pages/waves/js/waves.min.js"></script>

	<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

	<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
	<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>

	<script src="files/assets/pages/waves/js/waves.min.js"></script>

	<script src="files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="files/assets/pages/data-table/js/jszip.min.js"></script>
	<script src="files/assets/pages/data-table/js/pdfmake.min.js"></script>
	<script src="files/assets/pages/data-table/js/vfs_fonts.js"></script>
	<script src="files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

	<script src="files/assets/pages/data-table/js/data-table-custom.js"></script>
	<script src="files/assets/js/pcoded.min.js"></script>
	<script src="files/assets/js/vertical/vertical-layout.min.js"></script>
	<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="files/assets/js/script.js"></script>
	 
</body> 
</html>
<?php
}
else {
    echo "please fill the details";
    header("refresh:2;url=index.php");
}

?>