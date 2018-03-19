<?php

require 'dbconnect.php';
$uname = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Orders - Dashboard Celluloid</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		table {
			font-size: 12pt;
			table-layout: fixed;
			width: 100%;
		}

		tr, th, td {
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
	<?php include('navbar_admin.php'); ?>
	</header>

	<main>
		<br/>
		<center>
			<h1>Orders</h1>
			<?php
			$sel2 = "SELECT * FROM ".$tbl_prefix."order_details";
			$res2 = mysqli_query($conn, $sel2);
			$cnt = mysqli_num_rows($res2);
			if($cnt>0){
				?>
				<div style="max-width: 100%;">
					<table cellpadding="5">
						<tr>
							<th>Order ID</th>
							<th>User ID</th>
							<th>Product ID</th>
							<th>Full Name</th>
							<th>Address</th>
							<th>Payment</th>
						</tr>
					<?php
					while ($row2 = mysqli_fetch_assoc($res2)) {
						echo "<tr>";
						echo "<td>".$row2['order_id']."</td>";
						echo "<td>".$row2['uid']."</td>";
						echo "<td><a href='edit_prod.php?id=".$row2['pid']."'>".$row2['pid']."</a></td>";
						echo "<td>".$row2['full_name']."</td>";
						echo "<td>".$row2['address']."</td>";
						echo "<td>".$row2['payment_type']."</td>";
						echo "<th><a href=deleteorder_srv.php?id=".$row2['order_id'].">Delete</a>";
						echo "</tr>";
					}
				} else {
					echo "<h3>No orders found</h3>";
				}
				?>
				</table>
			</div>
		</center>
	</main>
	<footer>
		<?php include('admin_footer.php'); ?>
	</footer>
</body>
</html>