<?php
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("KDADMIN",$con);
$sql="INSERT INTO Feedback (Firstname,Lastname,EmailID,Contact,Feedback_query) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[contact]','$_POST[query]')";

if(!mysql_query($sql,$con))
{
	die(mysql_error());
}
echo "Query will be processed";
mysql_close($con);
?>
