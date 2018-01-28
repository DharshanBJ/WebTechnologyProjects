<?php
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("admin", $con);
$x=$_POST['did'];
$y=$_POST['pw1'];
$z=$_POST['pw2'];
$w=$_POST['pw3'];
$sql="select * from doctorinfo where DID='$x'";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
if(empty($row)) {
	echo "Invalid Entry";
}
$sql1="select salt from activeuser where user='$x'";
$res1=mysql_query($sql1, $con);
$row1=mysql_fetch_array($res1);
$salt=$row1["salt"];
$saltedy=$y.$salt;
$verifypass=hash('sha256', $saltedy);
if($row['Password']===$verifypass) {
	if($z <> $w) {
		echo "Entered password doesn't match";	
	}
	elseif($z === $w) {
		$newsalt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		$newz=hash('sha256', $z.$newsalt);
		$sql3="update doctorinfo set Password='$newz' where DID='$x'";
		$res3=mysql_query($sql3,$con);
		$act="update activeuser set salt='$newsalt' where user='$x'";
		$res4=mysql_query($act,$con);
		echo "Password Updated";	
	}
}
else {
	echo "Invalid Entry";
}
mysql_close();
?>