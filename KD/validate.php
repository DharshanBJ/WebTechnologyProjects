<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("KDADMIN",$con);
if('POST'=== $_SERVER['REQUEST_METHOD']) {
$x=mysql_real_escape_string($_POST["EMAIL"]);
$y=mysql_real_escape_string($_POST["pw1"]);
if($x!='') {
$sql="select *from usersinfo where Email='$x'";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$sql1="select salt from activeuser where uname='$x'";
$res1=mysql_query($sql1, $con);
$row1=mysql_fetch_array($res1);
$salt=$row1['salt'];
$saltedy=$y.$salt;
$verifypass=hash('sha256',$saltedy);
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
if($row['Email']===$x) {
	if($row['Password']===$verifypass) {
		//$sqlau="insert into activeuser(uname) values('$x')";
		//if(!mysql_query($sqlau,$con)) {
			//die(mysql_error());		
		//}
		//else {
			$_SESSION["ActiveUser1"] = $row['Email'];
			header("Location: kivi2.php");
		//}
    	exit;	
	}
	else {
		echo "<script>alert('Wrong password + " . $verifypass . "'); window.location.href='login.html';</script>";
		exit;
	}
}
else {
	echo "<script>alert('Wrong username'); window.location.href='login.html';</script>";
	exit;
}
}
else {
	header("Location: login.html");
    exit;
}
}
mysql_close($con);
?>