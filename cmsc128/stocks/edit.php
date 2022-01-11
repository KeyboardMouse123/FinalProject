<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `stocks_inventory` where stocks_id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Orders</title>
</head>
<body>
	<h2>Edit</h2>

	<form method="POST" action="update.php?id=<?php echo $id; ?>">
			<label>Transfer Papers:</label><input type="number" value="<?php echo $row['transfer_papers']; ?>" name="transfer_papers">
            <label>Sublimation Papers:</label><input type="number"value="<?php echo $row['sublimation_papers']; ?>" name="sublimation_papers">
			<label>Printed Outputs:</label><input type="number" value="<?php echo $row['printed_outputs']; ?>"name="printed_outputs">
            <label>Shirts:</label><input type="nubmer"value="<?php echo $row['shirts']; ?>" name="shirts">
			<label>Logo Stickers:</label><input type="number" value="<?php echo $row['logo_stickers']; ?>"name="logo_stickers">
			<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>