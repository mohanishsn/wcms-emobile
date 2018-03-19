<?php

require 'dbconnect.php';
session_start();

$pid = $_REQUEST['id'];

$del = "DELETE FROM ".$tbl_prefix."products WHERE pid=$pid";

if(!mysqli_query($conn, $del)){
	die("Could not delete ".mysqli_error());
} else {
	header("location:productdb.php");
}

?>