<?php

require 'dbconnect.php';

session_start();

$pid = $_POST['pid'];
$amt = $_POST['amt'];

$sel = "SELECT name FROM ".$tbl_prefix."products WHERE pid=$pid";
$res = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($res);
$prod_name = $row['name'];

$uname = $_SESSION['user'];
$sel2 = "SELECT uid FROM ".$tbl_prefix."users WHERE username='$uname'";
$res2 = mysqli_query($conn, $sel2);
$row2 = mysqli_fetch_assoc($res2);
$uid = $row2['uid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Place Your Order</title>
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
	<h1 align="center">Order Details</h1>
	<div class="order-container" align="center">
		<form action="order_srv.php" method="post">
			<input type="hidden" name="pid" value="<?php echo $pid; ?>">
			<input type="hidden" name="uid" value="<?php echo $uid; ?>">
			<table cellpadding="10">
				<tr>
					<td><label>Product Name: </label></td>
					<td><?php echo $prod_name; ?></td>
				</tr>
				<tr>
					<td>Your Name: </td>
					<td><input style="margin-left: 0px;" type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Shipping Address: </td>
					<td><textarea name="address" style="resize: none;" cols="35" rows="5"></textarea></td>
				</tr>
				<tr>
					<th align="center" colspan="2"><h3>Payment Details</h3></th>
				</tr>
				<tr>
					<td>Card Number: </td>
					<td><input type="number" name="cardno" minlength="16" maxlength="16"></td>
				</tr>
				<tr>
					<td>Name on Card: </td>
					<td><input type="text" name="cardname"></td>
				</tr>
				<tr>
					<td>CVV: </td>
					<td><input type="password" minlength="3" maxlength="3"></td>
				</tr>
				<tr>
					<td>Amount: </td>
					<td>Rs. <?php echo $amt; ?></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Place Order" class="btn-buy" style="width: 48%; float: left;" />
						<input type="button" value="Cancel" class="btn-buy" style="width: 48%; background-color: orange; float: right;" onclick="window.history.back()" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
