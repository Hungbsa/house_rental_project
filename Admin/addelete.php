<?php
include("../dbconn/Connt.php");
$id = $_GET['id'];
$sql = "DELETE FROM admin WHERE id = {$id}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Xóa Thành Công</p>";
	header("Location:../Admin/adminlist.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Xóa Thất bại</p>";
	header("Location:../Admin/adminlist.php?msg=$msg");
}
mysqli_close($conn);
?>