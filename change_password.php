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
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		table {
			font-size: 15pt;
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
			<h1>Change Password</h1>
			<form method="post" action="changepass_srv.php">
				<table cellpadding="15">
					<tr>
						<td>Current Password: </td>
						<td><input type="password" name="curr_pass" /></td>
					</tr>
					<tr>
						<td>New Password: </td>
						<td><input type="password" name="new_pass" /></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" class="btn-buy" value="Change" /></td>
					</tr>
				</table>
			</form>
		</center>
	</main>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>