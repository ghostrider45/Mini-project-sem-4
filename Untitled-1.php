<?php

$user = 'root';
$password = '';

$database = 'form1';

$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = " SELECT * FROM form1 ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>E-Trading</title>
	<link rel ="stylesheet" href="fetch.css">
</head>

<body>
	<section>
		<h1>E-Trading</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Employee name</th>
				<th>Age</th>
				<th>Address</th>
				<th>Email</th>
				<th>Phone No.</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['age'];?></td>
				<td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['phone'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
