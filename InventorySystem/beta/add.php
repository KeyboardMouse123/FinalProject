<?php
	include('conn.php');
 
	$fullName=$_POST['fullName'];
	$design=$_POST['design'];
    $shirtSize=$_POST['shirtSize'];
    $pieces=$_POST['pieces'];
    $dueDate=$_POST['dueDate'];
    $note=$_POST['note'];
 
	mysqli_query($conn,"INSERT into `user` (fullName,design,shirtSize,pieces,dueDate,note) values ('$fullName','$design','$shirtSize','$pieces','$dueDate','$note')");
	header('location:index.php');
 
?>