<?php

session_start();

$que = "SELECT DISTINCT brand FROM ".$tbl_prefix."products";
$res = mysqli_query($conn, $que);

$uname = $_SESSION['user'];

$sel = "SELECT role FROM ".$tbl_prefix."users WHERE username='$uname'";
$res2 = mysqli_query($conn, $sel);
$row2 = mysqli_fetch_assoc($res2);

?>

<nav class="nav">
	<ul>
		<?php
		if ($row2['role']=="Admin") {
			?>
			<li><a href="dashboard.php">Dashboard</a></li>
			<?php
		}
		?>
		<li class="home"><a href="index.php">Home</a></li>
		<li class="mob-drop">
			<a href="#">Mobiles &#9660;</a>
			<div class="drop-content" style="width: 150px;">
				<?php
				while($row = mysqli_fetch_assoc($res)){
					echo "<a href=mobile_category.php?device=".$row['brand'].">".$row['brand']."</a>";
				}
				?>
				<!--<a href="#">Motorola</a>
				<a href="#">OnePlus</a>
				<a href="#">Samsung</a>
				<a href="#">Xiaomi</a>-->
			</div>
		</li>
		<li style="width: 300px;">
			<div class="search-container" style="display:inline-block;">
				<form method="GET" action="search.php">
					<input type="text" name="search" />
					<input type="submit" value="Search" />
				</form>
			</div>
		</li>
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
					<a href="change_password.php">Change Password</a>
					<a href="view_orders.php">My Orders</a>
					<a href="logout.php">Logout</a>
				</div>
			</li>
			<?php
		}

		?>
	</ul>
</nav>