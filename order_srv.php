<?php

require 'dbconnect.php';
session_start();

$pid = $_POST['pid'];
#echo $pid;
$uid = $_POST['uid'];
#echo $uid;

$fullname = $_POST['fname'];
$addr = $_POST['address'];
$payment_type = 'Card';

$que = "INSERT INTO ".$tbl_prefix."order_details(uid, pid, full_name ,address, payment_type) VALUES($uid, $pid, '$fullname', '$addr', '$payment_type')";

if(mysqli_query($conn, $que)) {
	header("location: order_success.php");
} else {
	echo "Order failed";
}

?>