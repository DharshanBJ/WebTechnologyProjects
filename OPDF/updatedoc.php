
<?php
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}

$db_selected=mysql_select_db("ADMIN",$con);
$did=$_POST['did'];

$sql1="update doctorinfo set fname='$_POST[fname]' where DID='$did'";
$sql2="update doctorinfo set mname='$_POST[mname]' where DID='$did'";
$sql3="update doctorinfo set lname='$_POST[lname]' where DID='$did'";
$sql4="update doctorinfo set address='$_POST[address]' where DID='$did'";
$sql5="update doctorinfo set city='$_POST[city]' where DID='$did'";
$sql6="update doctorinfo set state='$_POST[state]' where DID='$did'";
$sql7="update doctorinfo set pincode='$_POST[pincode]' where DID='$did'";
$sql8="update doctorinfo set degree='$_POST[degree]' where DID='$did'";
$sql9="update doctorinfo set college='$_POST[college]' where DID='$did'";
$sql10="update doctorinfo set year='$_POST[year]' where DID='$did'";
$sql11="update doctorinfo set Experience='$_POST[exp]' where DID='$did'";
$sql12="update doctorinfo set NOY='$_POST[noy]' where DID='$did'";
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
echo "Record with Doctor ID ".$did." updated";
mysql_close();
?>