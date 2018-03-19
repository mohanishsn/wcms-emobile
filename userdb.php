<?php

require 'dbconnect.php';
$uname = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users - Dashboard Celluloid</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		table {
			font-size: 12pt;
			table-layout: fixed;
			width: 100%;
		}

		a{
			text-decoration: none;
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
			<h1>Users</h1>
			<?php
			$sel2 = "SELECT * FROM ".$tbl_prefix."users";
			$res2 = mysqli_query($conn, $sel2);
			$cnt = mysqli_num_rows($res2);
			if($cnt>0){
				?>
				<div style="max-width: 100%;">
					<table cellpadding="5">
						<tr>
							<th>User ID</th>
							<th>Username</th>
							<th>Email</th>
							<th>Role</th>
						</tr>
					<?php
					while ($row2 = mysqli_fetch_assoc($res2)) {
						echo "<tr>";
						echo "<td>".$row2['uid']."</td>";
						echo "<td>".$row2['username']."</td>";
						echo "<td>".$row2['email']."</td>";
						echo "<td>".$row2['role']."</td>";
						echo "<th><a href=edit_user.php?id=".$row2['uid'].">Edit</a>";
						echo "<th><a href=deleteuser_srv.php?id=".$row2['uid'].">Delete</a>";
						echo "</tr>";
					}
				} else {
					echo "<h3>No users found</h3>";
				}
				?>
				</table>
				<span><a href="add_user.php" style="font-size: 18pt;">Add New</a></span>
			</div>
		</center>
	</main>
	<footer>
		<?php include('admin_footer.php'); ?>
	</footer>
</body>
</html>