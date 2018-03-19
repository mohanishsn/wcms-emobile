<?php

$hostname = $_POST['hostname'];
$dbname = $_POST['dbname'];
$user = $_POST['user'];
$passwd = $_POST['passwd'];
$tbl_prefix = $_POST['tbl_prefix'];

$con=mysqli_connect($hostname,$user,$passwd,$dbname);

if(mysqli_connect_errno()) {
	die("Connection Error.");
}

$uname = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$salt = "usersalt";
$admin_pass = hash('sha256', $salt.$pass);

$q1="INSERT INTO ".$tbl_prefix."users(username,email,password,role) VALUES('$uname','$email','$admin_pass','Admin');";

if(mysqli_query($con, $q1)){
	echo "User Created. <br/>";
	echo "<br/><a href='index.php'>Visit Your Site</a>";
}

?>