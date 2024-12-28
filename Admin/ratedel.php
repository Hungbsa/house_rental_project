<?php
include("../dbconn/Connt.php");
$id = $_GET['id'];

$sql = "SELECT * FROM rating where id='$id'";
$result = mysqli_query($conn, $sql);

$msg="";
$sql = "DELETE FROM rating WHERE id = {$id}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>xóa thành công</p>";
	header("Location:../Admin/rating.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>xóa thất bại</p>";
		header("Location:../Admin/rating.php?msg=$msg");
}

mysqli_close($conn);
?>
