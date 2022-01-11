<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Name:</label><input type="text" name="fullName">
			<label>Design:</label><input type="text" name="design">
            <label>Shirt Size:</label>
				<select name="shirtSize">
					<option value="Small">Small</option>
					<option value="Medium">Medium</option>
					<option value="Large">Large</option>
				</select>	
			<label>Pieces:</label><input type="number" name="pieces">
            <label>Due Date:</label><input type="date" name="dueDate">
			<label>Note:</label><input type="text" name="note">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Full Name</th>
				<th>Design</th>
				<th>Shirt Size</th>
				<th>Pieces</th>
				<th>Due Date</th>
				<th>Note</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['fullName']; ?></td>
							<td><?php echo $row['design']; ?></td>
                            <td><?php echo $row['shirtSize']; ?></td>
							<td><?php echo $row['pieces']; ?></td>
                            <td><?php echo $row['dueDate']; ?></td>
							<td><?php echo $row['note']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>