<?php
	include('conn.php');
 
	$transfer_papers=$_POST['transfer_papers'];
	$sublimation_papers=$_POST['sublimation_papers'];
    $printed_outputs=$_POST['printed_outputs'];
    $shirts=$_POST['shirts'];
    $logo_stickers=$_POST['logo_stickers'];
 
	mysqli_query($conn,"insert into `stocks_inventory` (transfer_papers,sublimation_papers,printed_outputs,shirts,logo_stickers) values ('$transfer_papers','$sublimation_papers','$printed_outputs','$shirts','$logo_stickers')");
	header('location:index.php');
 
?>