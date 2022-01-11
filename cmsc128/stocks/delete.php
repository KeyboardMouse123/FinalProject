<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `stocks_inventory` where stocks_id='$id'");
	header('location:index.php');
?>