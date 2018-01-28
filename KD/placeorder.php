<?php
$con=mysql_connect("localhost","root","");
if(!$con) {
	die(mysql_error());
}
$db_selected=mysql_select_db("KDADMIN",$con);
echo "<script>var ans=confirm('Place Order?'); if(!ans) window.location.href='ordernow.html'; </script>"; 
$sql="insert into Process_Order(fname,lname,address,contact,process_order) values('$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[contact]','$_POST[order]')";
if(!mysql_query($sql,$con)) {
	die(mysql_error());
}
echo "Your Order is under process. We'll contact you before delivery!";
//mail('kiner.shah@somaiya.edu', 'noreply: Order placed!', 'Congrats, Order is Placed.');
mysql_close();
?>