<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"DELETE from `user` where id='$id'");
	header('location:index.php');
?>