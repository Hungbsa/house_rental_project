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
        <title>House rental | Tenant</title>
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

					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Tenant</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="../Admin/index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Tenant</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Tenant List</h4>
									<?php 
										if(isset($_GET['msg']))	
										echo $_GET['msg'];	
									?>
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
													<th>occupation</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
											<?php
													
												$query=mysqli_query($conn,"select * from tenant where pwd='123456'");
												$cnt=1;
												while($row=mysqli_fetch_row($query))
													{
											?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $row['1']; ?></td>
                                                    <td><?php echo $row['2']; ?></td>
                                                    <td><?php echo $row['3']; ?></td>
                                                    <td><?php echo $row['5']; ?></td>
                                                    <td><?php echo $row['6']; ?></td>
													
                                                    <td><a href="userdelete.php?id=<?php echo $row['0']; ?>"><button class="btn btn-danger">Delete</button></a></td>
                                                </tr>
                                                <?php
												$cnt=$cnt+1;
												} 
												?>
                                               
                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
        <script src="../Admin/assets/js/jquery-3.2.1.min.js"></script>

        <script src="../Admin/assets/js/popper.min.js"></script>
        <script src="../Admin/assets/js/bootstrap.min.js"></script>
        <script src="../Admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
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
		<script  src="../Admin/assets/js/script.js"></script>
		
    </body>
</html>
