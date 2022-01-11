<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	
	<div>
		<form method="POST" action="add.php">
			<label>Firstname:</label><input type="text" name="firstname">
			<label>Lastname:</label><input type="text" name="lastname">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
		<div class="container mt-3">
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
      </tr>
    </thead>
	<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
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