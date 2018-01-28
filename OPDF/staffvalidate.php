<?php
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("ADMIN",$con);
$x=$_POST["sid"];
$y=$_POST["pw1"];
if($x!='') {
$sql="select *from staff where Staff_ID='$x'";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$sql1="select salt from activeuser where user='$x'";
$res1=mysql_query($sql1, $con);
$row1=mysql_fetch_array($res1);
$salt=$row1["salt"];
$saltedy=$y.$salt;
$verifypass=hash('sha256', $saltedy);
if($row['Staff_ID']===$x) {
	if($row['Password']===$verifypass) {
		session_start();
		$_SESSION['loggedinuser'] = $row['Staff_ID'];
		$_SESSION['usercategory'] = 'S';
		header("Location: staff.html");
    	exit;
	}
	else {
		echo "<script>alert('Wrong password'); window.location.href='stafflogin.html';</script>";
		exit;
	}
}
else {
	echo "<script>alert('Wrong username'); window.location.href='stafflogin.html';</script>";
	exit;
}
}
else {
	header("Location: stafflogin.html");
    	exit;
}
mysql_close($con);
?>