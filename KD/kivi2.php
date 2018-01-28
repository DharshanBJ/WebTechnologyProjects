<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>KiVi Agro Ltd.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="newCss.css"> <!--Example of Extrenal CSS-->
        <link type="text/javascript" href="newjavascript.js">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="w3.css">-->
        <!--Example of internal/embedded CSS-->
        <style media="screen">
            iframe {
                width: 99%;
                height: 768px;
                border: white;
            }
	    .dropdown,.dropdown1 {
		max-width: 140px;
		background-color: white;
		display: none;
		position: absolute;
		left: 691px;;
		text-align: left;
		padding-left: 0px;
	    }
	    .dropdown1 {
		left: 340px;
	    }
	    ul li:hover ul.dropdown {
		display: block;
	    }
	    ul li ul.dropdown li {
		display: block;
	    }
	    
	    ul li:hover ul.dropdown1 {
		display: block;
	    }
	    ul li ul.dropdown1 li {
		display: block;
	    }
        </style>
    </head> 
    <body>	
        <div>
            <table>
                <tr>
                    <td colspan="2" style="float: left; width: 200px"><img src="logo.jpg" style="width: 100px; height: 100px"/></td>
                    <td style="font-size: 25px; text-align: right;"><h1>KD Agro Ltd.</h1></td>
                </tr>
            </table>
        </div>
        <div>
            <ul style="float: left"> <!--Example of inline CSS-->
                <li><a href="home.html" target="display">HOME</a></li>
                <li><a href="About.html" target="display">ABOUT US</a></li>
                <li>
		    <a href="products.html" target="display">PRODUCTS</a>
		    <ul class="dropdown1">
			<li><a href="Wheatpage.html" target="display">Wheat</a></li>
			<li><a href="ordermoong.html" target="display">Moong</a></li>
			<li><a href="ordermaize.html" target="display">Maize</a></li>
			<li><a href="orderrice.html" target="display">Rice</a></li>
			<li><a href="groundnut1.html" target="display">Groundnut</a></li>
			<li><a href="pearlmillet.html" target="display">Pearl Millet(Bajra)</a></li>
		    </ul>
		</li>
                <li><a href="ContactUs.html" target="display">CONTACT US</a></li>
                <li>
		    <a href="#">HELP</a>
		    <ul class="dropdown">
			<li><a href="queries_form.html" target="display">Queries & Grievances</a></li>
		    </ul>
		</li>
            </ul>
            <ul style="float: right">
		<?php
			/*$con=mysql_connect("localhost","root","");
			if(!$con) {
				die(mysql_error());
			}			
			$db_selected=mysql_select_db("KDADMIN",$con);
			$sql="select *from activeuser";
			$res=mysql_query($sql,$con);
			$row=mysql_fetch_array($res);*/
			echo "<li style='color: red'>Welcome ".$_SESSION['ActiveUser1']."!</li>";
		?>
		<li><a href="signout.php">SIGN OUT</a></li>
            </ul>
        </div>
        <div>
            <iframe  name="display" src="home.html"></iframe>
        </div>
    </body>
</html>
