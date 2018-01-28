<?php
$con=mysql_connect('localhost','root','');
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("ADMIN",$con);
$sql1="select * from patient where PID='$_POST[pid]'";
$res=mysql_query($sql1,$con);
$row=mysql_fetch_array($res);
if(empty($row)) {
	echo "Patient not found";
}
else {
$sql="insert into bill(PID,Amount,Date) values('$_POST[pid]','$_POST[amt]',SYSDATE())";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
echo "Bill entry made!";
}
mysql_close();
?>