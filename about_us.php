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
	<title>About Us - Celluloid</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		table {
			font-size: 15pt;
		}

		tr, th, td {
			border-bottom: 1px solid black;
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
			<h1>About Us</h1>
			<p>
				We are a technology focused team.
			</p>
			<p>All the products that you see here are a 100% Genuine and Sealed.</p>
			<p>We don't levy any hidden taxes or charges when you place an order.</p>
			<p>For any information regarding any product or delivery, feel free to go to the contact page and get in touch with us.</p>
			<p>Happy Shopping!</p>
		</div>
	</main>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>