<?php

require('dbconnect.php');
session_start();

$username = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$role = $_POST['role'];

$check = "SELECT username FROM ".$tbl_prefix."users WHERE username='$username'";

/*if(mysqli_query($conn, $check)) {
	echo "Username not available";
}*/

$res = mysqli_query($conn, $check);
$user_count = mysqli_num_rows($res);

if ($user_count>0) {
	echo "Username not available";
}

else {
	$salt = "usersalt";
	$password = hash('sha256', $salt.$pass);

	$ins = "INSERT INTO ".$tbl_prefix."users(username, email, password, role) VALUES('$username','$email','$password', '$role')";

	if(!mysqli_query($conn, $ins)) {
		echo "Failed";
	} else {
		header("location: userdb.php");
	}
}

?>