<?php

require 'dbconnect.php';
session_start();

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
$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$price = $_POST['price'];

#echo 'img/'.$img;
#$ins = "INSERT INTO ".$tbl_prefix."products(name, brand, weight, dimensions, battery, resolution, processor, ram, storage, frontcam, rearcam, sim, img, price) VALUES('$pname','$brand', $weight, '$dims', $battery, '$resol', '$processor', $ram, $storage, '$fcam', '$rcam','$sim', LOAD_FILE('/var/www/html/emobie/img/$img'), $price)";

$ins = "INSERT INTO ".$tbl_prefix."products(name, brand, weight, dimensions, battery, resolution, processor, ram, storage, frontcam, rearcam, sim, img, price) VALUES('$pname','$brand', '$weight', '$dims', '$battery', '$resol', '$processor', '$ram', '$storage', '$fcam', '$rcam','$sim', '$img', '$price');";

if(!mysqli_query($conn, $ins)) {
	echo "Failed.";
} else {
	header("location: productdb.php");
}

?>