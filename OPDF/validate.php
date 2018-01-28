<?php
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("ADMIN",$con);
$x=mysql_real_escape_string($_POST["uname"]);
$y=mysql_real_escape_string($_POST["pw1"]);
if($x!='') {
$sql="select *from admininfo where USERNAME='$x'";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$sql1="select salt from activeuser where user='$x'";
$res1=mysql_query($sql1, $con);
$row1=mysql_fetch_array($res1);
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$salt=$row1["salt"];
$saltedy=$y.$salt;
$verifypass=hash('sha256', $saltedy);
if($row['USERNAME']===$x) {
	if($row['PASSWORD']===$verifypass) {
		session_start();
		$_SESSION['loggedinuser'] = $row['USERNAME'];
		$_SESSION['usercategory'] = 'A';
		header("Location: admin.html");
    	exit;
	}
	else {
		echo "<script>alert('Wrong password'); window.location.href='login1.html';</script>";
		exit;
	}
}
else {
	echo "<script>alert('Wrong username'); window.location.href='login1.html';</script>";
	exit;
}
}
else {
	header("Location: login1.html");
    exit;
}
mysql_close($con);
?>