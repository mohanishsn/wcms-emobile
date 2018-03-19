<?php

require 'dbconnect.php';
session_start();

$uid = $_REQUEST['id'];

$del = "DELETE FROM ".$tbl_prefix."users WHERE uid=$uid";

if(!mysqli_query($conn, $del)){
	die("Could not delete ".mysqli_error());
} else {
	header("location:userdb.php");
}

?>