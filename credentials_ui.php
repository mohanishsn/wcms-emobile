<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Install Script</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
</head>
<body>
	<main>
		<h2 align="center" style="margin-top: 50px;">Connect database</h2>
		<form method="POST" action="installui_srv.php">
			<div class="container" style="margin-left: 350px;">
				<table cellpadding="10">
					<tr>
						<td>Hostname: </td>
						<td><input type="text" name="host" required /></td>
					</tr>
					<tr>
						<td>Database Name: </td>
						<td><input type="text" name="dbname" required /></td>
					</tr>
					<tr>
						<td>Database User: </td>
						<td><input type="text" name="dbuser" required /></td>
					</tr>
					<tr>
						<td>Database Password: </td>
						<td><input type="text" name="dbpass" required /></td>
					</tr>
					<tr>
						<td>Table Prefix</td>
						<td><input type="text" name="tbl_prefix" required /></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="Send" style="width: 100%" /></td>
					</tr>
				</table>
			</div>
		</form>
	</main>
</body>
</html>