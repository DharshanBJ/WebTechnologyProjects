<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

$newsalt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
$pass="iam".strtolower($_POST['fname']);
$newpass=hash('sha256', $pass.$newsalt);
mysql_select_db("admin", $con);

$sql="INSERT INTO doctorinfo (fname, mname, lname, address, city, state, pincode,  degree, college, year, Experience, NOY, Password) VALUES
	('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[degree]',
	'$_POST[college]','$_POST[year]','$_POST[exp]','$_POST[noy]', '$newpass');";

if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}
echo "1 record added";

$sql2="select max(DID) as 'DID' from doctorinfo;";
$res2=mysql_query($sql2, $con);
$row2=mysql_fetch_array($res2);
$did=$row2['DID'];

$sql3="insert into activeuser(user, salt) values('$did', '$newsalt');";
$res3=mysql_query($sql3, $con);
mysql_close($con)
?> 
  