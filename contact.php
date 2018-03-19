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
	<title>Contact Us - Celluloid</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		table {
			font-size: 15pt;
		}

		tr, th, td {
			border-bottom: 1px solid black;
		}
		a {
			text-decoration: none;
		}

		p {
			font-size: 18px;
		}

	</style>
</head>
<body>
	<header>
	<?php include('navbar3.php'); ?>
	</header>

	<main>
		<div style="text-align: center; margin-top: 100px;">
			<h1>Contact Us</h1>
			<p>
				Mail us at:  <a href="mailto:xyz@gmail.com">nagarkarmohanish@gmail.com</a>
			</p>
			<p>Give us a call on <a href="tel:07030632369">07030632369</a></p>
			<p>
				Our office is located at:
				<address style="font-weight: bold;">
					SICSR, Atur Complex,
					Gokhale Cross Road, Model Colony,
					Pune - 411016
				</address>
			</p>
			<p>Happy Shopping!</p>
		</div>
	</main>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>