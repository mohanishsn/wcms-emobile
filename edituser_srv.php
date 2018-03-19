<?php

require 'dbconnect.php';
session_start();

$uid = $_POST['uid'];
$username = $_POST['uname'];
$email = $_POST['email'];
$role = $_POST['role'];

#$ins = "INSERT INTO ".$tbl_prefix."products(name, brand, weight, dimensions, battery, resolution, processor, ram, storage, frontcam, rearcam, sim, img, price) VALUES('$pname','$brand', $weight, '$dims', $battery, '$resol', '$processor', $ram, $storage, '$fcam', '$rcam','$sim', '$img', $price)";

$upd = "UPDATE ".$tbl_prefix."users SET username='$username', email='$email', role='$role' WHERE uid=$uid";

if(!mysqli_query($conn, $upd)) {
	die("Failed ".mysqli_error());
} else {
	header("location: userdb.php");
}

?>