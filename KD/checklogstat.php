<?php
/*$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("KDADMIN",$con);
$sql="select *from activeuser";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
if(empty($row)) {
	echo "<script>alert('You have to Login to place an order'); window.history.back()</script>"; 	
}
else {
	echo "<script>window.location.href='ordernow.html';</script>";	
}
mysql_close();*/
session_start();
if(!isset($_SESSION['ActiveUser1'])) {
	echo "<script>window.history.back()</script>";
	echo "<script>alert('Please Login to place order');</script>";
}
else {
	echo "<script>window.location.href='ordernow.html';</script>";
}
?>