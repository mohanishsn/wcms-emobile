<?php

require 'dbconnect.php';
session_start();

$uname = $_SESSION['user'];
$sel = "SELECT uid FROM 17_users WHERE username='$uname'";
$res = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($res);
$uid = $row['uid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Orders Placed</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		table {
			font-size: 15pt;
		}

		tr, th, td {
			border-bottom: 1px solid black;
		}
	</style>
</head>
<body>
	<header>
	<?php include('navbar3.php'); ?>
	</header>

	<main>
		<br/>
		<center>
			<h1>Your Orders</h1>
			<?php
			$sel2 = "SELECT * FROM ".$tbl_prefix."order_details WHERE uid=$uid";
			$res2 = mysqli_query($conn, $sel2);
			$cnt = mysqli_num_rows($res2);
			if($cnt>0){
				?>
				<table cellpadding="15">
					<tr>
						<th>Order ID</th>
						<th>Product</th>
						<th>Shipping Address</th>
						<th>Payment Type</th>
					</tr>
				<?php
				while ($row2 = mysqli_fetch_assoc($res2)) {
					echo "<tr>";
					echo "<td>".$row2['order_id']."</td>";
					$selp = "SELECT name FROM 17_products WHERE pid=".$row2['pid'];
					$resp = mysqli_query($conn, $selp);
					$rowp = mysqli_fetch_assoc($resp);
					echo "<td>".$rowp['name']."</td>";
					echo "<td>".$row2['address']."</td>";
					echo "<td>".$row2['payment_type']."</td>";
					echo "</tr>";
				}
			} else {
				echo "<h3>No orders found. Keep shopping!</h3>";
			}
			?>
			</table>
		</center>
	</main>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>