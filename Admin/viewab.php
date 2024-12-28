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
        <title>house rental | About</title>
		<link rel="icon" href="image/favicon.png" type="image/png">
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/style.css">
		
    </head>
    <body>
	
		<!-- Main Wrapper -->
	
		
			<!-- Header -->
				<?php include("../Admin/inhead.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">View About</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">View About</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">List Of About</h4>
									<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];
											
									?>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table class="table table-stripped table-bordered table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Number</th>
													<th>description</th>
													<th>Image</th>
													<th>Actions</th>
													
												</tr>
											</thead>
											<?php
													
													$query=mysqli_query($conn,"select * from house");
													$cnt=1;
													while($row=mysqli_fetch_row($query))
														{
											?>
											<tbody>
												<tr>
													<td><?php echo $cnt; ?></td>
													<td><?php echo $row['2']; ?></td>
													<td><?php echo $row['9']; ?></td>
													<td><img src="upload/<?php echo $row['3']; ?>" height="100px" width="100px"></td>
													<td><a href="../Admin/edtab.php?id=<?php echo $row['0']; ?>"><button class="btn btn-info">Edit</button></a>
													<a href="../Admin/viewdel.php?id=<?php echo $row['0']; ?>"><button class="btn btn-danger">Delete</button></a></td>
												</tr>
											</tbody>
												<?php
												$cnt=$cnt+1;
												} 
												?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				
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
		
		<!-- Custom JS -->
		<script  src="../Admin/assets/js/script.js"></script>
		
    </body>
</html>
