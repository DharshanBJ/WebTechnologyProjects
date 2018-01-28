<?php

$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("ADMIN",$con);
$x=$_POST['did'];
$y=$_POST['pid'];
$z=$_POST['prescription'];
if(empty($x)) {
	echo "<script>alert('Please enter doctor ID');</script>";
}
if(empty($y)) {
	echo "<script>alert('Please enter patient ID');</script>";
}
if(empty($z)) {
	echo "<script>alert('Please enter prescription');</script>";
}
$sql="INSERT INTO Prescription (DID,PID,Prescription,Date) VALUES ('$_POST[did]','$_POST[pid]','$_POST[prescription]',SYSDATE())";

if(!mysql_query($sql,$con))
{
	die('Error:'.mysql_error());
}
echo "Prescription recorded ";
mysql_close($con);
	
?>