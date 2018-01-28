<?php
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("KDADMIN",$con);
$x=mysql_real_escape_string($_POST['fname']);
$y=mysql_real_escape_string($_POST['lname']);
$z=mysql_real_escape_string($_POST['email']);
$w=mysql_real_escape_string($_POST['pw']);
$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
$saltedw = $w.$salt;
$pass=hash('sha256', $saltedw);
$sql1="select * from usersinfo where Email='$z';";
$res=mysql_query($sql1,$con);
$row=mysql_fetch_array($res);
if(!mysql_query($sql1,$con)) {
	die(mysql_error());
}
elseif($row['Email']!=$z) {
	$sql="insert into usersinfo(Fname,Lname,Email,Password) values('$x','$y','$z','$pass')";
	if(!mysql_query($sql,$con)) {
		die(mysql_error());
	}
	else {
		$act="insert into activeuser(uname, salt) values('$z', '$salt')";
		session_start();
		$_SESSION["ActiveUser1"]=$z;
		$res=mysql_query($act,$con);
		echo "<script>alert('User added successfully');</script>";
		echo "<script>window.location.href='kivi2.php';</script>";
		exit;
	}
}
else {
	echo "<script>alert('User already exists. Try signing up using different email id');</script>";
	echo "<script>window.location.href='signup.html';</script>";
}
mysql_close($con);
?>