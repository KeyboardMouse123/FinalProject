<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>

	<form method="POST" action="update.php?id=<?php echo $id; ?>">
	<div class="form-group">
		<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname" class="form-control	">
	</div>

	<div class="form-group">
		<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
	</div>
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>