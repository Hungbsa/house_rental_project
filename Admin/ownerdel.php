<?php
include("../dbconn/Connt.php");
$id = $_GET['id'];

// view code//
$sql = "SELECT * FROM owner where id='$id'";
$result = mysqli_query($conn, $sql);

$msg="";
$sql = "DELETE FROM owner WHERE id = {$id}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>xóa thành công</p>";
	header("Location:../Admin/owerlist.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>xóa thất bại</p>";
		header("Location:../Admin/owerlist.php?msg=$msg");
}

mysqli_close($conn);
?>
