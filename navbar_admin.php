<?php

session_start();

#$que = "SELECT DISTINCT brand ".$tbl_prefix."products";
$res = mysqli_query($conn, $que);

?>

<nav class="nav">
	<ul>
		<li class="home"><a href="dashboard.php">Home</a></li>
		<li class="home"><a href="index.php">Visit Site</a></li>
		<?php
		if(!isset($_SESSION['user'])) {
		?>
			<li style="float: right;"><a href="login.php">Login</a></li>
		<?php
		} else {
			//$que = "SELECT username FROM users WHERE email=$_SESSION['user']";
			//$res = mysqli_query($conn, $que);
			//$user = mysqli_fetch_array($res);
			?>
			<li class="mob-drop" style="float: right;">
				<a href="#"><?php echo $_SESSION['user']; ?>&#9660;</a>
				<div class="drop-content" style="width: 150px;">
					<a href="logout.php">Logout</a>
				</div>
			</li>
		<?php
		}

		?>
	</ul>
</nav>