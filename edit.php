<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT * from `user` where id='$id'");
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
		<label>Name:</label><input type="text" value="<?php echo $row['fullName']; ?>" name="fullName">
		<label>Design:</label><input type="text" value="<?php echo $row['design']; ?>" name="design">
        <label>Shirt Size:</label>
		<select name="shirtSize" value="<?php echo $row['shirtSize']; ?>">
					<option value="Small">Small</option>
					<option value="Medium">Medium</option>
					<option value="Large">Large</option>
				</select>	
        <label>Pieces:</label><input type="number" value="<?php echo $row['pieces']; ?>" name="pieces">
        <label>Due Date:</label><input type="date" value="<?php echo $row['dueDate']; ?>" name="dueDate">
        <label>Note:</label><input type="text" value="<?php echo $row['note']; ?>" name="note">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>