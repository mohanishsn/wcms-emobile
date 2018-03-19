<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login to shop!</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
</head>
<body>
	<header>
		<?php include('navbar3.php'); ?>
	</header>
	<main>
		<h2 align="center" style="margin-top: 50px;">Login</h2>
		<form method="POST" action="login_srv.php">
			<div class="container">
				<input type="email" name="email" placeholder="Email Address" style="margin-top: 25px;" required /> <br/> <br/>
				<input type="password" name="password" placeholder="Password" required />
				<input type="submit" name="submit" value="Login" />
				<div style="text-align: right; width: 410px; margin-top: 10px;">New user? <a href="register.php">Join Us!</a>
			</div>
		</form>
	</main>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>