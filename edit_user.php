<?php

require 'dbconnect.php';
session_start();

$uid = $_REQUEST['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product - Celluloid</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
</head>
<body>
	<header>
	<?php include('navbar_admin.php'); ?>
	</header>

	<h1 align="center">Edit Details</h1>
	<div class="user-container" align="center">
		<?php
			$sel = "SELECT * FROM ".$tbl_prefix."users WHERE uid=$uid";
			$res = mysqli_query($conn, $sel);
			$row = mysqli_fetch_assoc($res);
			?>
		<form action="edituser_srv.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="uid" value="<?php echo $row['uid']; ?>" />
			<table cellpadding="10">
				<tr>
					<td>User ID: </td>
					<td><input type="number" name="uid" value="<?php echo $row['uid']; ?>" disabled></td>
				</tr>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uname" value="<?php echo $row['username']; ?>"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
				<tr>
					<td>Role: </td>
					<td>
						<select name="role">
							<?php
								if($row['role']=="Admin"){
									?>
									<option value="Admin">Admin</option>
									<option value="User">User</option>
									<?php
								} else {
									?>
									<option value="User">User</option>
									<option value="Admin">Admin</option>
									<?php
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Update" class="btn-buy" style="width: 48%; float: left;" />
						<input type="button" value="Cancel" class="btn-buy" style="width: 48%; background-color: orange; float: right;" onclick="window.history.back()" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
