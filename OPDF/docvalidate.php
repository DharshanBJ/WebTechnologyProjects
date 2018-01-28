<?php
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("ADMIN",$con);
$x=$_POST["did"];
$y=$_POST["pw1"];
if($x!='') {
$sql="select *from doctorinfo where DID='$x'";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$sql1="select salt from activeuser where user='$x'";
$res1=mysql_query($sql1, $con);
$row1=mysql_fetch_array($res1);
$salt=$row1["salt"];
$saltedy=$y.$salt;
$verifypass=hash('sha256', $saltedy);
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
if($row['DID']===$x) {
	if($row['Password']===$verifypass) {
		session_start();
		$_SESSION['loggedinuser'] = $row['DID'];
		$_SESSION['usercategory'] = 'D';
		header("Location: doc.html");
    	exit;
	}
	else {
		echo "<script>alert('Wrong password'); window.location.href='doctorlogin.html';</script>";
		exit;
	}
}
else {
	echo "<script>alert('Wrong username'); window.location.href='doctorlogin.html';</script>";
	exit;
}
}
else {
	header("Location: doctorlogin.html");
    	exit;
}
mysql_close($con);
?>