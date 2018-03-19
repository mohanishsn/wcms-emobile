<?php

require 'dbconnect.php';

$email = $_POST['email'];
$pass = $_POST['password'];
echo $email."<br/>";
echo $pass."<br/>";

$salt = "usersalt";
$password = hash('sha256', $salt.$pass);
echo $password."<br/>";

$check = "SELECT * FROM ".$tbl_prefix."users WHERE email='$email' AND password='$password'";

$res = mysqli_query($conn, $check);
$count = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);

echo $row['password'];

if($count>0) {
	session_start();
	//echo $row['username'];
	$_SESSION['user'] = $row['username'];
	//echo $_SESSION['user'];
	if ($row['role']=='User') {
		header("location:index.php");
	} else {
		header("location:dashboard.php");
	}

} else {
	echo "Failed.";
}

?>