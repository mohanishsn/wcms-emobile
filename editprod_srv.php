<?php

require 'dbconnect.php';
session_start();

echo $tbl_prefix;

$pid = $_POST['pid2'];
echo $pid;

$pname = $_POST['pname'];
$brand = $_POST['brand'];
$weight = $_POST['weight'];
$dims = $_POST['dims'];
$battery = $_POST['battery'];
$resol = $_POST['resol'];
$processor = $_POST['proc'];
$ram = $_POST['ram'];
$storage = $_POST['store'];
$rcam = $_POST['rcam'];
$fcam = $_POST['fcam'];
$sim = $_POST['sim'];
#$img = $_POST['img'];
$price = $_POST['price'];

#$ins = "INSERT INTO ".$tbl_prefix."products(name, brand, weight, dimensions, battery, resolution, processor, ram, storage, frontcam, rearcam, sim, img, price) VALUES('$pname','$brand', $weight, '$dims', $battery, '$resol', '$processor', $ram, $storage, '$fcam', '$rcam','$sim', '$img', $price)";

$upd = "UPDATE ".$tbl_prefix."products SET name='$pname', brand='$brand', weight='$weight', dimensions='$dims', battery='$battery', resolution='$resol', processor='$processor', ram='$ram', storage='$storage', frontcam='$fcam', rearcam='$rcam', sim='$sim', price='$price' WHERE pid=$pid";

if(!mysqli_query($conn, $upd)) {
	die("Failed ".mysqli_error());
} else {
	header("location: productdb.php");
}

?>