<?php
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}

$db_selected=mysql_select_db("ADMIN",$con);
$PID=$_POST['pid'];

$sql1="update patient set FName='$_POST[Fname]' where PID='$PID'";
$sql2="update patient set MName='$_POST[Mname]' where PID='$PID'";
$sql3="update patient set LName='$_POST[Lname]' where PID='$PID'";
$sql4="update patient set Address='$_POST[Address]' where PID='$PID'";
$sql5="update patient set DOB='$_POST[DOB]' where PID='$PID'";
$sql6="update patient set Age='$_POST[Age]' where PID='$PID'";
$sql7="update patient set Residential='$_POST[Residential]' where PID='$PID'";
$sql8="update patient set Mobile_No='$_POST[Mobile]' where PID='$PID'";
$sql9="update patient set Office_No='$_POST[Office]' where PID='$PID'";
$sql10="update patient set Email='$_POST[Email]' where PID='$PID'";
$sql11="update patient set Blood_Group='$_POST[BloodGroup]' where PID='$PID'";
$sql12="update patient set Height_in_cm='$_POST[Height]' where PID='$PID'";
$sql13="update patient set Weight_in_kg='$_POST[Weight]' where PID='$PID'";
$sql14="update patient set Allergy='$_POST[Allergy]' where PID='$PID'";
$sql15="update patient set PastHistory='$_POST[PastHistory]' where PID='$PID'";
$sql16="update patient set Gender='$_POST[Gender]' where PID='$PID'";
$res1=mysql_query($sql1,$con);
$res2=mysql_query($sql2,$con);
$res3=mysql_query($sql3,$con);
$res4=mysql_query($sql4,$con);
$res5=mysql_query($sql5,$con);
$res6=mysql_query($sql6,$con);
$res7=mysql_query($sql7,$con);
$res8=mysql_query($sql8,$con);
$res9=mysql_query($sql9,$con);
$res10=mysql_query($sql10,$con);
$res11=mysql_query($sql11,$con);
$res12=mysql_query($sql12,$con);
$res13=mysql_query($sql13,$con);
$res14=mysql_query($sql14,$con);
$res15=mysql_query($sql15,$con);
$res16=mysql_query($sql16,$con);
echo "Record with Patient ID ".$PID." updated";
mysql_close();
?>