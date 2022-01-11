<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Transfer Papers:</label><input type="number" name="transfer_papers">
            <label>Sublimation Papers:</label><input type="number" name="sublimation_papers">
			<label>Printed Outputs:</label><input type="number" name="printed_outputs">
            <label>Shirts:</label><input type="nubmer" name="shirts">
			<label>Logo Stickers:</label><input type="number" name="logo_stickers">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Transfer Papers</th>
				<th>Sublimation Papers</th>
				<th>Printed Outputs</th>
				<th>Shirts</th>
				<th>Logo Stickers</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `stocks_inventory`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['transfer_papers']; ?></td>
							<td><?php echo $row['sublimation_papers']; ?></td>
                            <td><?php echo $row['printed_outputs']; ?></td>
							<td><?php echo $row['shirts']; ?></td>
                            <td><?php echo $row['logo_stickers']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['stocks_id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['stocks_id']; ?>">Delete</a>
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