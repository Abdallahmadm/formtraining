<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./bootstrap.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col">
				
				<?php
				$mysqli=new mysqli("localhost",
					"root", "", "abdullahi");
				if ($mysqli=== false) {
					die("ERROR: could not connect.".$mysqli->mysqli_connect_error);
				}
				$sql= "SELECT * FROM ahmed";
				if ($result=$mysqli->query ($sql)){
					if ($result->num_rows > 0) {
						echo "<table class='table table-striped'>
						<thead>
						<tr>
						<th >id</th>
						<th >name</th>
						<th >mobile</th>
						<th >degmo</th>
						</tr>
						</thead>
						<tbody>";
						while ($row=$result->fetch_array()){
							echo "<tr> <td>".
							$row['id']."</td>";
							echo "<tr> <td>".
							$row['name']."</td>";
							echo "<tr> <td>".
							$row['number']."</td>";
							echo "<tr> <td>".
							$row['degmo']."</td> </tr>";
						}
					}
					else {
						echo "ERROR: could not able to execute $sql.". $mysqli->error;
					}
				}

$mysqli->close();
?>
			</div>
		</div>
	</div>

</body>
</html>