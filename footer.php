<?php

$fromYear = 2016;
$currYear = (int)date('Y');

?>
<div class="foot-container">
	<nav class="foot-links">
		<ul>
			<li><a href="about_us.php">About Us</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
	</nav>
	<div style="text-align: center;">Copyrights &copy; Celluloid <?php echo $fromYear.'-'.$currYear; ?>. All Rights Reserved.</div>
</div>