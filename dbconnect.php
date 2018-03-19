<?php

$hostname = "localhost";
$user = "temp";
$passwd = "temp123";
$dbname = "project";
$tbl_prefix = "17_";

//Create connection
$conn = mysqli_connect($hostname, $user, $passwd, $dbname);

//Check connection
if(!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}

?>