<?php

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
        <title>House Rental - Dashboard</title>
		<link rel="icon" href="image/favicon.png" type="image/png">
        <link rel="shortcut icon" type="image/x-icon" href="../Admin/assets/img/favicon.png">
        <link rel="stylesheet" href="../Admin/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Admin/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Admin/assets/css/feathericon.min.css">
		<link rel="stylesheet" href="../Admin/assets/plugins/morris/morris.css">
        <link rel="stylesheet" href="../Admin/assets/css/style.css">
    </head>
    <body>
				<?php include("../Admin/inhead.php"); ?>
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div style="margin-top:30px" class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<p></p>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-primary">
											<i class="fe fe-users"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
										<h3><?php $sql = "SELECT * FROM owner";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3> 
										
										<h6 class="text-muted">Registered owner</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-success">
											<i class="fe fe-users"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM member";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">Member</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-danger">
											<i class="fe fe-user"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM tenant";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">Tenant</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-info">
											<i class="fe fe-home"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM house";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">House in have</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-warning">
											<i class="fe fe-table"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM logs ";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">LogIn Time</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-secondary">
											<i class="fe fe-building"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM booking";
										$query = $conn->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">Quantity rent of </h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
			</div>
			<!-- /Page Wrapper -->
		

		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="../Admin/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="../Admin/assets/js/popper.min.js"></script>
        <script src="../Admin/assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="../Admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="../Admin/assets/plugins/raphael/raphael.min.js"></script>    
		<script src="../Admin/assets/plugins/morris/morris.min.js"></script>  
		<script src="../Admin/assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="../Admin/assets/js/script.js"></script>
		
    </body>

</html>
