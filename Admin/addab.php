<?php 
session_start();
include("../dbconn/Connt.php");
if(isset($_SESSION['username']))
{
	header("location:login.php");
}

//// add code
$error="";
$msg="";
if(isset($_POST['addabout']))
{
	
	$no_of_rooms=$_POST['no_of_rooms'];
	$description=$_POST['description'];
	$pics=$_FILES['pics']['name'];
	
	$temp_name1 = $_FILES['pics']['tmp_name'];


	move_uploaded_file($temp_name1,"upload/$pics");
	
	$sql="insert into house (no_of_rooms,description,pics) values('$no_of_rooms','$description','$pics')";
	$result=mysqli_query($conn,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Thêm thành công</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>thêm thất bại</p>";
		}
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>House rental | add AB</title>
		<link rel="icon" href="image/favicon.png" type="image/png">
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="../Admin/assets/css/feathericon.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="../Admin/assets/css/select2.min.css">
		
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
								<h3 class="page-title">About</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">About Edit</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h2 class="card-title">About Edit</h2>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
										<div class="row">
											<div class="col-xl-12">
												<h5 class="card-title">About view </h5>
												<?php echo $error; ?>
												<?php echo $msg; ?>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Number</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="no_of_rooms" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="pics" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="description" rows="10" cols="30"></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="text-left">
											<input type="submit" class="btn btn-primary"  value="Submit" name="addabout" style="margin-left:200px;">
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			<!-- /Page Wrapper -->
		<!-- /Main Wrapper -->
		<script src="../Admin/assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="../Admin/assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- jQuery -->
        <script src="../Admin/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="../Admin/assets/js/popper.min.js"></script>
        <script src="../Admin/assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="../Admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="../Admin/assets/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="../Admin/assets/js/script.js"></script>
    </body>

</html>