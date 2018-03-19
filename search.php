<?php

require 'dbconnect.php';
session_start();

$keyword = $_GET['search'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home - Mobile Store</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css" />
	<style type="text/css">
		a {
			text-decoration: none;
			color: #5299D3;
		}
	</style>
</head>
<body>
	<header>
	<?php include('navbar3.php'); ?>
	</header>

	<main>
		<div align="center" style="font-size: 18pt; padding-top:50px; padding-bottom: 25px; ">
			<span>You Searched for "<?php echo $keyword; ?>"</span>
		</div>
			<?php
			$prod = "SELECT * FROM ".$tbl_prefix."products WHERE name LIKE '%$keyword%' OR brand LIKE '%$keyword%';";
			$res = mysqli_query($conn,$prod);
			$cnt = mysqli_num_rows($res);
			if($cnt>0) {
			?>

			<div class="container2">
			<table align="center">
				<tr>
					<?php
					$count = 0;
					while ($row = mysqli_fetch_assoc($res)) {
					$count++;
					?>
						<td>
							<div class="dev-container">
								<a href="product_page.php?pid=<?php echo $row['pid']; ?>">
								<?php
								echo '<img height="350" src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>';
								echo '<p class="dev-name">'.$row['name'].'</p>';
								echo "</a>";
								echo '<p class="dev-name">Rs. '.$row['price'].'</p>';
								?>
							</div>
						</td>
					<?php
					if($count==2){
						$count=0;
						echo "</tr>";
					}
				}
			?>
			</table>
		</div>
		<?php
		} else {
			?>
			<div align="center" style="font-size: 18pt;">Sorry, no results found!</div>
			<?php
		}
		?>
	</main>

	<footer>
		<?php include('footer.php'); ?>
	</footer>
</body>
</html>