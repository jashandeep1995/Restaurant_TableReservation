<?php
include_once("Admin/database.php");
ob_start();
session_start();
$nam=$_REQUEST['name'];
$lnam=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$phno=$_REQUEST['phone'];
$cntry=$_REQUEST['country'];
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$landmark=$_REQUEST['landmark'];
$pin=$_REQUEST['pin'];
$address=$_REQUEST['Address'];
//$y=mysql_query("insert into tb_address values('','$nam','$lnam','$email','$phno','$pin','$cntry','$state','$city','$landmark','$address','$_SESSION[user]','','$time','1')");	
mysql_query("update tb_address set Name='$nam',Lname='$lnam',Phn='$phno',Pin='$pin',Country='$cntry',State='$state',City='$city',Address='$address',Landmark='$landmark' where Email='$_SESSION[user]'");
$get_product=mysql_fetch_array(mysql_query("select * from tb_temp where session='$_SESSION[user]'"));
$Rx=rand(1,100000);
$Rx1="$get_product[product_id].$Rx";
$_SESSION['bill_id']="$Rx1";
$y=mysql_query("insert into tb_bill values('','$_SESSION[bill_id]','$get_product[product_id]','$get_product[quantity]','$get_product[Total]','$get_product[session]','$get_product[date]','$get_product[status]')");
header("location:cart.php");
?>