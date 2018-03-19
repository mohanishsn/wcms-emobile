<?php

require 'dbconnect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products - Dashboard Celluloid</title>
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

		a {
			text-decoration: none;
		}

		#addnew {
			font-size: 18pt;
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
			<h1>Products</h1>
			<?php
			$sel2 = "SELECT * FROM ".$tbl_prefix."products";
			$res2 = mysqli_query($conn, $sel2);
			$cnt = mysqli_num_rows($res2);
			if($cnt>0){
				?>
				<div style="max-width: 100%;">
					<table cellpadding="5">
						<tr>
							<th>Product ID</th>
							<th>Name</th>
							<th>Brand</th>
							<th>Weight</th>
							<th>Battery</th>
							<th>Processor</th>
							<th>RAM</th>
							<th>Storage</th>
							<th>Price</th>
						</tr>
					<?php
					while ($row2 = mysqli_fetch_assoc($res2)) {
						echo "<tr>";
						echo "<td>".$row2['pid']."</td>";
						echo "<td>".$row2['name']."</td>";
						echo "<td>".$row2['brand']."</td>";
						echo "<td>".$row2['weight']."</td>";
						echo "<td>".$row2['battery']."</td>";
						echo "<td>".$row2['processor']."</td>";
						echo "<td>".$row2['ram']."</td>";
						echo "<td>".$row2['storage']."</td>";
						echo "<td>".$row2['price']."</td>";
						echo "<th><a href=edit_prod.php?id=".$row2['pid'].">Edit</a>";
						echo "<th><a href=deleteprod_srv.php?id=".$row2['pid'].">Delete</a>";
						echo "</tr>";
					}
				} else {
					echo "<h3>No products yet</h3>";
				}
				?>
				</table>
				<span><a id="addnew" href="add_product.php">Add New</a></span>
			</div>
		</center>
	</main>
	<footer>
		<?php include('admin_footer.php'); ?>
	</footer>
</body>
</html>