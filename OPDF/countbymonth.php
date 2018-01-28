<!DOCTYPE html>
<html>
<head>
<title>Count</title>
<style>
	p {
		font-family: calibri;
		color: navy;
		font-size: 30px;	
	}
	div {
		margin-top: 70px;
	}
</style>
</head>
<body>
<div align="center">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
$months=array('January','February','March','April','May','June','July','August','September','October','November','December');
mysql_select_db("admin", $con);
$mon=$_POST['countbym'];
if($mon<1 && $mon>12) {
	echo "<script>window.location.href='CountPatientsinAMonth.html';</script>";
}
else {
$sql="select count(*) as COUNT from patient where MONTH(Last_visit)='$mon'";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
echo "<p>No. of patients in month ".$months[$mon - 1].": ".$row['COUNT']."</p>";
}
mysql_close();
?>
</div>
</body>
</html>