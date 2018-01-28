<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Create Doctor's info</title>
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
            td h2{
		padding-left: 40px;
		font-family: calibri;
            }
             #form1{
                width: 60%;
                margin-left: 200px;
                margin-top: 70px;
            }
			#form2,#form3 {
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
		$id=$_POST['did'];
		$sql="select * from doctorinfo where DID='$id'";
		$res=mysql_query($sql,$con);
		$row=mysql_fetch_array($res);
		if(!mysql_query($sql,$con)) {
			die(mysql_error());
		}
		if(empty($row)) {
			echo "Doctor Not Found!";
		}
		else {
		?>
        <div>
            <form action="updatedoc.php" method="post">          
                <table class="table-responsive" id='form1'>
                    <tr>
                        <td colspan="4"><h3 class="well">Doctor's General Details</h3></td>
                    </tr>
					<tr>
						<td>Doctor Id: </td>
						<td><input class="form-control" type="text" name="did" value="<?php echo $id; ?>"></td>
					</tr>
					<tr>
                        <td>Name: </td>
                        <td><input class="form-control" type="text" name="fname" value="<?php echo $row['fname']; ?>"></td>
                        <td><input class="form-control" type="text" name="mname" value="<?php echo $row['mname']; ?>"></td>
                        <td><input class="form-control" type="text" name="lname" value="<?php echo $row['lname']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Address:  </td>
                        <td colspan="3"><input class="form-control" type='text' name="address" value="<?php echo $row['address']; ?>"></td>
                    </tr>
                    <tr>
                        <td>City: </td>
                        <td colspan="3"><input class="form-control" type='text' name="city" value="<?php echo $row['city']; ?>"></td>
                    </tr>
                    <tr>
                        <td>State: </td>
                        <td colspan="3"><input class="form-control" type='text' name="state" value="<?php echo $row['state']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Pincode: </td>
                        <td colspan="3"><input class="form-control" type='text' name="pincode" value="<?php echo $row['pincode']; ?>"></td>
                    </tr>
					<tr><td><p><!-- --></p></td></tr>
					<tr><td><p><!-- --></p></td></tr>
                    <tr>
                        <td colspan="4"><h3 class="well">Qualification Details</h3></td>
                    </tr>
                    <tr>
                        <td>Degree:</td>
                        <td colspan="3"><input class="form-control" type='text' name="degree" value="<?php echo $row['degree']; ?>"></td>
                    </tr>
                    <tr>
                        <td>College: </td>
                        <td colspan="3"><input class="form-control" type='text' name="college" value="<?php echo $row['college']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Year: </td>
                        <td colspan="3"><input class="form-control" type="text" name="year" value="<?php echo $row['year']; ?>"></td>
                    </tr>
               
                    <tr>
            
					<tr><td><p><!-- --></p></td></tr>
					<tr><td><p><!-- --></p></td></tr>					
						<td colspan="4"><h3 class="well">Experience</h3></td>
                    </tr>
                    <tr>
                        <td>Experience</td>
                        <td colspan="3"><input class="form-control" type='text'  name="exp" value="<?php echo $row['Experience']; ?>" id="Experience"></td>
                    </tr>
                    <tr>
                        <td>No of years: </td>
                        <td colspan="3"><input class="form-control" type='text' name="noy" value="<?php echo $row['NOY']; ?>" ></td>
						
                    </tr>
					<tr><td><p><!-- --></p></td></tr>
					<tr>
					<td><input type='submit' class="btn btn-success" value="Update"></td>
					</tr>
                </table>
				<?php } ?>
            </form>
        </div>
    </body>
</html>