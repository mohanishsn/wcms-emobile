<?php

require 'dbconnect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create User - Celluloid</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
	</style>
</head>
<body>
	<header>
	<?php include('navbar_admin.php'); ?>
	</header>

	<h1 align="center">Create User</h1>
	<div class="user-container" align="center">
		<form action="adduser_srv.php" method="post" enctype="multipart/form-data">
			<table cellpadding="10">
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uname" required></td>
				</tr>
				<tr>
					<td>Email ID: </td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="pass" required></td>
				</tr>
				<tr>
					<td>Role</td>
					<td>
						<select name="role">
							<option value="User">User</option>
							<option value="Admin">Admin</option>
						</select>
					</td>
				</tr>
					<td colspan="2">
						<input type="submit" value="Create User" class="btn-buy" style="width: 100%; float: left;" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
