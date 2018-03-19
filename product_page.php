<?php

require 'dbconnect.php';

#session_start();
$prod_id = $_REQUEST['pid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buy mobiles at the cheapest rates</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style>
		th {
			text-align: left;
		}
	</style>
</head>
<body>
	<header>
	<?php include('navbar3.php'); ?>
	</header>

	<main>
		<table cellpadding="10" cellspacing="5">
			<form action="order_details.php" method="post">
				<input type="hidden" name="pid" value="<?php echo $prod_id; ?>">
				<tr>
					<?php
					$sel = "SELECT * FROM ".$tbl_prefix."products WHERE pid=$prod_id";
					$res = mysqli_query($conn, $sel);
					$row = mysqli_fetch_assoc($res);
					echo '<td rowspan="12"><img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/></td>';
					echo '<th colspan="2" style="font-size:20pt;">'.$row['name'].'</th>';
					echo "</tr>";

					echo '<tr>';
					echo '<th>Brand</th>';
					echo '<td>'.$row['brand'].'</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>Weight</th>';
					echo '<td>'.$row['weight'].' gm</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>Dimensions</th>';
					echo '<td>'.$row['dimensions'].'</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>Battery</th>';
					echo '<td>'.$row['battery'].' mAh</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>Resolution</th>';
					echo '<td>'.$row['resolution'].'</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>Processor</th>';
					echo '<td>'.$row['processor'].'</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>RAM</th>';
					echo '<td>'.$row['ram'].' GB</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>Storage</th>';
					echo '<td>'.$row['storage'].' GB</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>Camera</th>';
					echo '<td>Rear : '.$row['rearcam'].' <br/>
					Front: '.$row['frontcam'].'</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>SIM</th>';
					echo '<td>'.$row['sim'].'</td>';
					echo '</tr>';

					echo '<tr>';
					echo '<th>Price</th>';
					echo '<td>Rs. '.$row['price'].'</td>';
					echo '</tr>';

					echo '<tr>';
					if(!isset($_SESSION['user'])) {
						echo '<td colspan="3"><input type="button" value="Login to Shop" onclick="window.location.href=\'login.php\'" class="btn-buy" /></td>';
					} else {
						echo '<td colspan="3"><input type="submit" value="BUY" class="btn-buy" /></td>';
					}
					?>
				</tr>
				<input type="hidden" name="amt" value="<?php echo $row['price'] ?>" />
			</form>
		</table>
	</main>
	
	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>