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
$gen=$_POST['countbyg'];
if($gen!='Male' && $gen!='Female') {
	echo "<script>window.location.href='CountPatientsByGender.html';</script>";
}
else {
$sql="select count(*) as COUNT from patient where Gender='$gen'";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
echo "<p>No. of patients of gender ".$gen.": ".$row['COUNT']."</p>";
}
mysql_close();
?>
</div>
</body>
</html>