<?php

require 'dbconnect.php';
session_start();

$pid = $_REQUEST['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product - Celluloid</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
			-webkit-appearance: none; 
		}
	</style>
</head>
<body>
	<header>
	<?php include('navbar_admin.php'); ?>
	</header>

	<h1 align="center">Edit Details</h1>
	<div class="user-container" align="center">
		<?php
			$sel = "SELECT * FROM ".$tbl_prefix."products WHERE pid=$pid";
			$res = mysqli_query($conn, $sel);
			$row = mysqli_fetch_assoc($res);
			?>
		<form action="editprod_srv.php" method="post" enctype="multipart/form-data">
			<table cellpadding="10">
				<input type="hidden" name="pid2" value="<?php echo $row['pid']; ?>" />
				<tr>
					<td>Product ID: </td>
					<td><input type="number" name="pid" value="<?php echo $row['pid']; ?>" disabled></td>
				</tr>
				<tr>
					<td>Product Name: </td>
					<td><input type="text" name="pname" value="<?php echo $row['name']; ?>"></td>
				</tr>
				<tr>
					<td>Manufacturer: </td>
					<td><input type="text" name="brand" value="<?php echo $row['brand']; ?>"></td>
				</tr>
				<tr>
					<td>Weight (gm): </td>
					<td><input type="number" name="weight" value="<?php echo $row['weight']; ?>"></td>
				</tr>
				<tr>
					<td>Dimensions: </td>
					<td><input type="text" name="dims" value="<?php echo $row['dimensions']; ?>"></td>
				</tr>
				<tr>
					<td>Battery (mAh): </td>
					<td><input type="number" name="battery" value="<?php echo $row['battery']; ?>"></td>
				</tr>
				<tr>
					<td>Resolution: </td>
					<td><input type="text" name="resol" value="<?php echo $row['resolution']; ?>"></td>
				</tr>
				<tr>
					<td>Processor: </td>
					<td><input type="text" name="proc" value="<?php echo $row['processor']; ?>"></td>
				</tr>
				<tr>
					<td>RAM (GB): </td>
					<td><input type="number" name="ram" value="<?php echo $row['ram']; ?>"></td>
				</tr>
				<tr>
					<td>Storage (GB): </td>
					<td><input type="number" name="store" value="<?php echo $row['storage']; ?>"></td>
				</tr>
				<tr>
					<td>Rear Cam: </td>
					<td><input type="text" name="rcam" value="<?php echo $row['rearcam']; ?>"></td>
				</tr>
				<tr>
					<td>Front Cam: </td>
					<td><input type="text" name="fcam" value="<?php echo $row['frontcam']; ?>"></td>
				</tr>
				<tr>
					<td>SIM: </td>
					<td><input type="text" name="sim" value="<?php echo $row['sim']; ?>"></td>
				</tr>
				<tr>
					<td>Price (Rs.): </td>
					<td><input type="number" name="price" value="<?php echo $row['price']; ?>"></td>
				</tr>
				<!--<tr>
					<td colspan="2">
						<input type="submit" value="Make Changes" class="btn-buy" style="width: 100%; float: left;" />
					</td>
				</tr>-->
				<tr>
					<td colspan="2">
						<input type="submit" value="Make Changes" class="btn-buy" style="width: 48%; float: left;" />
						<input type="button" value="Cancel" class="btn-buy" style="width: 48%; background-color: orange; float: right;" onclick="window.history.back()" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
