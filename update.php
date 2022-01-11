<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$fullName=$_POST['fullName'];
	$design=$_POST['design'];
    $shirtSize=$_POST['shirtSize'];
    $pieces=$_POST['pieces'];
    $dueDate=$_POST['dueDate'];
    $note=$_POST['note'];;
 
	mysqli_query($conn,"UPDATE `user` set fullName='$fullName', design='$design', shirtSize='$shirtSize', pieces='$pieces', dueDate='$dueDate', note='$note' where id='$id'");
	header('location:index.php');
?>