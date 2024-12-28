<?php

include("../dbconn/Connt.php");
if(isset($_SESSION['username']))
{
	header("location:login.php");
}

$error="";
$msg="";
if(isset($_POST['add']))
{
	
	$id=$_POST['id'];
	$owner_id=$_POST['owner_id'];
	$no_of_rooms=$_POST['no_of_rooms'];
	$rate=$_POST['rate'];

	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$description=$_POST['description'];

	$pics=$_FILES['pics']['name'];
	$temp_name  =$_FILES['pics']['tmp_name'];
	move_uploaded_file($temp_name,"house/$pics");

	
	$sql="INSERT INTO house (id,owner_id,no_of_rooms,rate,pics,country,state,city,address,description)
	VALUES('$id','$owner_id','$no_of_rooms','$rate','$pics','$country','$state','$city','$address','$description')";
	$result=mysqli_query($conn,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Thêm Thành Công</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Thêm thất bại.Vui Lòng thử lại!</p>";
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>House rental | Add</title>
		<link rel="icon" href="image/favicon.png" type="image/png">
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../Admin/assets/img/favicon.png">
		
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
								<h3 style="margin-top:30px" class="page-title">House</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="../Admin/index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">House</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add House</h4>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">House Detail</h5>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Description</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="description" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">House Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="id">
															<option value="">Select</option>
															<option value="">Number 1</option>
															<option value="">Number 2</option>
															<option value="">Number 3</option>
															<option value="">Number 4</option>
															<option value="">Number 5 </option>
															<option value="">Number 6</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Owner Rent Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="owner_id">
															<option value="">Select owner</option>
															<option value="">1</option>
															<option value="">2</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Number</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="no_of_rooms" placeholder="number rooms want to rent">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Prices</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="rate" placeholder="">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<select class="form-control" required name="state">
															<option value="">Select state</option>
															<option value=" ">Binh Duong</option>
															<option value=" ">TpHCM</option>
															<option value=" ">Di An</option>
															<option value=" ">Q12</option>
															<option value=" ">Ha Noi</option>
															<option value=" ">Long Chau</option>
															<option value=" ">SCL</option>
															<option value=" ">Ha Giang</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="address" required placeholder="">
													</div>
												</div>
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<select class="form-control" required name="city">
															<option value="">Select city</option>
															<option value="">Binh Duong</option>
															<option value="">TpHCM</option>
															<option value="">Di An</option>
															<option value="">Thanh Hoa</option>
															<option value="">Ha Noi</option>
															<option value="">Long Chau</option>
															<option value="">Kien Giang</option>
															<option value="">Ha Giang</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Country</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="country" placeholder="">
													</div>
												</div>
												
											</div>
										</div>
										
										
										
												
										<h4 class="card-title"></h4>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="pics" type="file">
													</div>
												</div>

										<hr>
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
										
								</div>
								</form>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>