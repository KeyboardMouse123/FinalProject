<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$transfer_papers=$_POST['transfer_papers'];
	$sublimation_papers=$_POST['sublimation_papers'];
    $printed_outputs=$_POST['printed_outputs'];
    $shirts=$_POST['shirts'];
    $logo_stickers=$_POST['logo_stickers'];
 
	mysqli_query($conn,"update `stocks_inventory` set transfer_papers='$transfer_papers', sublimation_papers='$sublimation_papers', printed_outputs='$printed_outputs', shirts='$shirts', logo_stickers='$logo_stickers'  where stocks_id='$id'");
	header('location:index.php');
?>