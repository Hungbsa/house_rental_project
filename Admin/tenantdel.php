<?php
include("../dbconn/Connt.php");
$t_id = $_GET['t_id'];

// view code//
$sql = "SELECT * FROM owner where id='$t_id'";
$result = mysqli_query($conn, $sql);

$msg="";
$sql = "DELETE FROM owner WHERE uid = {$t_id}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>xóa thành công</p>";
	header("Location:../Admin/tenantlist.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>xóa thất bại</p>";
		header("Location:../Admin/tenantlist.php?msg=$msg");
}

mysqli_close($conn);
?>
