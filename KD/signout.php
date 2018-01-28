<?php
/*$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("KDADMIN",$con);
$sql="delete from activeuser";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
else {
	echo "<script> alert('Successfully logged out!'); </script>";
	header("Location: kivi.html");
}*/
session_start();
session_unset();
session_destroy();
header("Location: index.html");
exit;
?>