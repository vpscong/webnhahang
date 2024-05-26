<?php
	$id= $_GET['id'];
	$sql = "DELETE FROM donhang where donhang_id = '$id'";
	$query = mysqli_query($conn,$sql);
	header("location: quantri.php?page_layout=giohang");
?>