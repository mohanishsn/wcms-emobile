<?php

require('dbconnect.php');
session_start();

$uname = $_SESSION['user'];

$curr_pass = $_POST['curr_pass'];
$new_pass = $_POST['new_pass'];

$salt = "usersalt";
$curr_pass_hash = hash('sha256', $salt.$curr_pass);

$check = "SELECT password FROM ".$tbl_prefix."users WHERE username='$uname'";
$res = mysqli_query($conn, $check);
$row = mysqli_fetch_assoc($res);

if ($row['password']==$curr_pass_hash) {
	$new_pass_hash = hash("sha256", $salt.$new_pass);
	$upd = "UPDATE ".$tbl_prefix."users SET password='$new_pass_hash' WHERE username='$uname'";

	if (mysqli_query($conn, $upd)) {
		header("location: index.php");
	} else {
		die("Error ".mysqli_error());
	}
	
} else {
	echo "Invalid Current Password";
}

?>