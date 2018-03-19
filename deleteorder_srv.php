<?php

require 'dbconnect.php';
session_start();

$oid = $_REQUEST['id'];

$del = "DELETE FROM ".$tbl_prefix."order_details WHERE order_id=$oid";

if(!mysqli_query($conn, $del)){
	die("Could not delete ".mysqli_error());
} else {
	header("location:ordersdb.php");
}

?>