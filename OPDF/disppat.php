<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Patient Info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="boot.css">
        <link rel="stylesheet" href="w3.css">
        <style>
            td img {
		width: 90px;
		height: 50px;
                float: right;
            }
            td h2 {
		padding-left: 40px;
		font-family: calibri;
            }
            #form1 {
                width: 60%;
                margin-left: 200px;
                margin-top: 70px;
            }
            
        </style>
    </head>
    <body>
    <?php
    $con=mysql_connect("localhost","root","");
    if(!$con) {	
    	die(mysql_error());
    }
    $db_selected=mysql_select_db("ADMIN",$con);
    $id=$_POST['pid'];
    $sql="select * from patient where PID='$id'";
    if(!mysql_query($sql,$con)) {	
    	die(mysql_error());
    }
	 $res=mysql_query($sql,$con);$row=mysql_fetch_array($res);
	 if(empty($row)) {
		echo "Patient Not Found!";
	 }
	 else {
	 ?>
        <div>
            <form action="updatepat.php" method="post">
                <table id="form1">
                    <tr>
                        <td colspan='4'><h3 class="well">Patient's General details</h3></td>
                    </tr>
                    <tr>
                    		<td>Patient ID: </td>
                    		<td><input class="form-control" type="text"  name="pid" value="<?php echo $row['PID']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Name: </td>
                        <td><input class="form-control" type="text"  name="Fname" value="<?php echo $row['FName']; ?>"></td>
                        <td><input class="form-control" type="text" name="Mname" value="<?php echo $row['MName']; ?>"></td>
                        <td><input class="form-control" type="text"  name="Lname" value="<?php echo $row['LName']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Address:  </td>
                        <td colspan="3"><input class="form-control" type='text' name="Address" value="<?php echo $row['Address']; ?>" id="address"></td>
                    </tr>
                    <tr>
                        <td>Date of birth: </td>
                        <td><input class="form-control" type="date" name="DOB" value="<?php echo $row['DOB']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Age: </td>
                        <td><input class="form-control" type='text' name="Age" value="<?php echo $row['Age']; ?>"></td>
                    </tr>
		    <tr>
			<td>Gender: </td>
			<td><input class="form-control" type='text' name="Gender" value="<?php echo $row['Gender']; ?>"></td>    
		    </tr>
                    <tr>
                        <td>Contact: </td>
                        <td><input class="form-control" type='text' name="Residential" value="<?php echo $row['Residential']; ?>"></td>
                        <td><input class="form-control" type='text' name="Mobile" value="<?php echo $row['Mobile_No']; ?>"></td>
                        <td><input class="form-control" type='text' name="Office" value="<?php echo $row['Office_No']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td colspan='3'><input class="form-control" type='text'  name="Email" value="<?php echo $row['Email']; ?>"></td>
                    </tr>
                <tr><td><p><!-- --></p></td></tr>
				<tr><td><p><!-- --></p></td></tr>
                    <tr>
                        <td colspan='4'><h3 class="well">Health details</h3></td>
                    </tr>
                    <tr>
                        <td>Blood group: </td>
                        <td><input class="form-control" type="text" name="BloodGroup" value="<?php echo $row['Blood_Group']; ?>"></td>    
                    </tr>
                    <tr>
                        <td>Height(in cms):</td>						
						<td><input class="form-control" type="text"  name="Height" value="<?php echo $row['Height_in_cm']; ?>"></td>
					</tr>
		    <tr>
                        <td>Weight(in kgs): </td>
                        <td><input class="form-control" type="text"  name="Weight" value="<?php echo $row['Weight_in_kg']; ?>"></td>
		    </tr>
		    <tr>
                        <td>Allergy: </td>
                        <td><input class="form-control" type="text" name="Allergy" value="<?php echo $row['Allergy']; ?>"></td>
                    </tr>
                    <tr>
                        <td><h6>Medical History:</h6></td>
                    </tr>
                    <tr>
                        <td>Past records: </td> 
                        <td colspan="3"><input class="form-control" type="text" name="PastHistory"  value="<?php echo $row['PastHistory']; ?>"></td>
                    
					</tr>
					<tr><td><p><!-- --></p></td></tr>
					<tr>
						<td><input class="btn btn-success" type="submit" value="Update"></td>
					</tr>
				</table>
				<?php } ?>
            </form>
        </div>
    </body>
</html>
