<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("admin", $con);

$sql="INSERT INTO patient (FName, MName, LName, Address, DOB, Age, Residential, Mobile_No, Office_No, Email, Blood_Group, Height_in_cm, Weight_in_kg, Allergy, PastHistory)
VALUES
('$_POST[Fname]','$_POST[Mname]','$_POST[Lname]','$_POST[Address]','$_POST[DOB]','$_POST[Age]','$_POST[Residential]','$_POST[Mobile]','$_POST[Office]','$_POST[Email]','$_POST[BloodGroup]','$_POST[Height]','$_POST[Weight]','$_POST[Allergy]','$_POST[PastHistory]')";


if (!mysql_query($sql,$con))
  {
  die(mysql_error()); 
  }
  
echo "1 record added";

mysql_close($con)
?> 
  
 
 