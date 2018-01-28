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
mysql_select_db("admin", $con);
$age=$_POST['countbya'];
if($age<1 || $age>100) {
	echo "<script>window.location.href='CountPatientsByAge.html';</script>";
}
else {
$sql="select count(*) as COUNT from patient where Age='$age'";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
echo "<p>No. of patients of age ".$age.": ".$row['COUNT']."</p>";
}
mysql_close();
?>
</div>
</body>
</html>