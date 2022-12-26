<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./bootstrap.css">
<style>
body {
  background-image: url('img5.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>

	<div class="container"><br><br>
		<div class="row">
			<div class="col">

				<h1 style="color:white">Blood Donor Form</h1><br>
				
				<form method="POST">
					<label style="color:white">Donor Name</label><br>
					<input style="color: black" type="text" class="form-control" name="name" required="name"><br><br>
					<label style="color:white">Mobile</label><br>
					<input style="color: black" type="number" class="form-control" name="number" required="number"><br><br>
					<label style="color:white">Degmo</label><br>
					<input style="color: black" type="text" class="form-control" name="degmo" required="degmo"><br><br>

					<button type="save" style="background-color:orange; border-color:orange; color:white" name="save">Save</button>
				</form>
<?php

if (isset($_POST["save"])) {
		// code...
	
	$dname = $_POST['name'];
	$mobile = $_POST['number'];
	$degmo = $_POST['degmo'];

	$conn= new mysqli("localhost", "root", "", "abdullahi");

	$sql = "INSERT INTO ahmed (dname,mobile,degmo) VALUES ('$dname', '$mobile', '$degmo')";

	if ($conn->query($sql)){
		echo '<span style="color:white;">Macaamiil Data daadu waa la xareeyay.</span>';
	}else{
		echo "Qaladbaa dhacay data daadu maysan xaroon " . $conn->error;
	}

  	}
?>
  </div>
		</div>
	</div>
</body>
</html>