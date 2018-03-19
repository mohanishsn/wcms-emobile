<?php

session_start();
require 'dbconnect.php';

$uname = $_SESSION['user'];

$check = "SELECT role FROM ".$tbl_prefix."users WHERE username='$uname'";
$res = mysqli_query($conn, $check);
$row = mysqli_fetch_assoc($res);

if($row['role']=="User" || $row['role']=="") {
	header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard - Mobile Store</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style type="text/css">
		a {
			text-decoration: none;
			color: #5299D3;
		}
	</style>
</head>
<body>
	<header>
	<?php include('navbar_admin.php'); ?>
	</header>

	<main>
		<div class="content" style="text-align: center; padding: 50px 100px 30px 350px;">
			<table cellpadding="15" style="margin-top: 80px;">
				<tr>
					<td><a href="userdb.php"><img height="150" src="img/user-vector.jpg" alt="UserImg" /></a></td>
					<td><a href="productdb.php"><img height="150" src="img/mob-vector.jpg" alt="UserImg" /></a></td>
					<td><a href="ordersdb.php"><img height="150" src="img/orders.png" alt="UserImg" /></a></td>
				</tr>
				<tr style="font-size: 16pt;">
					<td>Users</td>
					<td>Products</td>
					<td>Orders</td>
				</tr>
			</table>
		</div>
	</main>

	<footer>
		<?php include('admin_footer.php'); ?>
	</footer>
</body>
</html>