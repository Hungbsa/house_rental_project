<?php
include("../dbconn/Connt.php");
$id = $_GET['id'];

$sql = "SELECT * FROM house where id='$id'";
$result = mysqli_query($conn, $sql);

$msg="";
$sql = "DELETE FROM house WHERE id = {$id}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>xóa thành công</p>";
	header("Location:../Admin/viewhouse.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>xóa thất bại</p>";
		header("Location:../Admin/viewhouse.php?msg=$msg");
}

mysqli_close($conn);
?>
