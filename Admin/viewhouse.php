<?php
session_start();
include("../dbconn/Connt.php");
if(isset($_SESSION['username']))
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>House rental - View house</title>
		<link rel="icon" href="image/favicon.png" type="image/png">
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="../Admin/assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="../Admin/assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="../Admin/assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="../Admin/assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/style.css">
		
	
    </head>
    <body>
	
				<?php include("../Admin/inhead.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">View house</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="../Admin/index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">View</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					
					
					
					<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-4">House View</h4>
										<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];	
										?>
                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <!-- <th>P ID</th> -->
                                                    <th>owner ID</th>
                                                    <th>Quantity</th>
                                                    <th>Prices</th>
                                                    <th>country</th>
													<th>state</th>
                                                    <th>city</th>
                                                    <th>state</th>
													<th>description</th>
                                                    <th>address</th>
                                                    <th>Actions</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
												<?php
													
													$query=mysqli_query($conn,"select * from house");
													while($row=mysqli_fetch_row($query))
													{
												?>
											
                                                <tr>
                                                    <!-- <td><?php echo $row['0']; ?></td> -->
                                                    <td><?php echo $row['1']; ?></td>
                                                    <td><?php echo $row['2']; ?></td>
                                                    <td><?php echo $row['3']; ?></td>
                                                    <td><?php echo $row['5']; ?></td>
                                                   
                                                    <td><?php echo $row['6']; ?></td>
                                                    <td><?php echo $row['7']; ?></td>
                                                    <td><?php echo $row['8']; ?></td>
													
                                                   
                                                    <td><?php echo $row['9']; ?></td>
													
                                                    
                                                    <td><?php echo $row['8']; ?></td>
													<td><a href="khongcolameditnenlaxinhaydungnhanvaodaynhecamonratnhieu.php?id=<?php echo $row['0'];?>"><button class="btn btn-info">Edit</button></a>
                                                    <a href="../Admin/viewdel.php?id=<?php echo $row['0'];?>"><button class="btn btn-danger">Delete</button></a></td>
                                                </tr>
                                               <?php
												} 
												?>
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
					
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="../Admin/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="../Admin/assets/js/popper.min.js"></script>
        <script src="../Admin/assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="../Admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="../Admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="../Admin/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="../Admin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="../Admin/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="../Admin/assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="../Admin/assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="../Admin/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="../Admin/assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="../Admin/assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="../Admin/assets/plugins/datatables/buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="../Admin/assets/js/script.js"></script>
		
    </body>
</html>
