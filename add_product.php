<?php

require 'dbconnect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Product - Celluloid</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
			-webkit-appearance: none; 
			margin: 0; 
		}
	</style>
</head>
<body>
	<header>
	<?php include('navbar_admin.php'); ?>
	</header>

	<h1 align="center">Add New Product</h1>
	<div class="order-container" align="center">
		<form action="addprod_srv.php" method="post" enctype="multipart/form-data">
			<table cellpadding="10">
				<tr>
					<td>Product Name: </td>
					<td><input type="text" name="pname"></td>
				</tr>
				<tr>
					<td>Brand: </td>
					<td><input type="text" name="brand"></td>
				</tr>
				<tr>
					<td>Weight(gm): </td>
					<td><input type="text" name="weight"></td>
				</tr>
				<tr>
					<td>Dimensions: </td>
					<td><input type="text" name="dims"></td>
				</tr>
				<tr>
					<td>Battery(mAh): </td>
					<td><input type="text" name="battery"></td>
				</tr>
				<tr>
					<td>Resolution: </td>
					<td><input type="text" name="resol"></td>
				</tr>
				<tr>
					<td>Processor: </td>
					<td><input type="text" name="proc"></td>
				</tr>
				<tr>
					<td>RAM(GB): </td>
					<td><input type="text" name="ram"></td>
				</tr>
				<tr>
					<td>Storage(GB): </td>
					<td><input type="text" name="store"></td>
				</tr>
				<tr>
					<td>Rear Cam(MP) </td>
					<td><input type="text" name="rcam"></td>
				</tr>
				<tr>
					<td>Front Cam(MP) </td>
					<td><input type="text" name="fcam"></td>
				</tr>
				<tr>
					<td>SIM: </td>
					<td><input type="text" name="sim"></td>
				</tr>
				<tr>
					<td>Image: </td>
					<td><input type="file" name="image" accept="image/*"></td>
				</tr>
				<tr>
					<td>Price(Rs.) </td>
					<td><input type="text" name="price"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Add to Database" class="btn-buy" style="width: 100%; float: left;" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
