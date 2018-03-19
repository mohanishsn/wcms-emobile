<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
</head>
<body>
	<header>
		<?php include('navbar3.php'); ?>
	</header>
	<main>
		<h2 align="center" style="margin-top: 50px;">Register</h2>
		<form method="POST" action="register_srv.php">
			<div class="container">
				<input type="text" name="username" placeholder="Username" required />
				<input type="email" name="email" placeholder="Email Address" style="margin-top: 25px;" required /> <br/> <br/>
				<input type="password" name="password" placeholder="Password" required />
				<input type="submit" name="submit" value="Create Account" />
				<div style="text-align: right; width: 410px; margin-top: 10px;">Already Registered? <a href="login.php">Login!</a></div>
			</div>
		</form>
	</main>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>