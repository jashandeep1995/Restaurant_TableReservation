<?php
ob_start();
session_start();
include_once("Admin/database.php");
$guest=$_REQUEST['guest'];
$id=$_REQUEST['h1'];
$date=$_REQUEST['resdate'];
$time=$_REQUEST['restime'];
$tableno=$_REQUEST['c1'];


if($_REQUEST['ss'])
{
	header("location:reservation.php?guest=$guest&ss=$_REQUEST[ss]&date=$date&time=$time");
}
else
{
	if($_SESSION['user'])
	{
		
$x=mysql_query("select * from tb_reservation where date='$date' and time='$time' and table_no=$tableno");
if(mysql_num_rows($x)>0)
 {
	$_SESSION['userr']="Already Booked"; 
	header("location:reservation.php");
 }
 else
 {
$y=mysql_query("insert into tb_reservation values('','$guest','$date','$time','$tableno','$_SESSION[user]','','','','','1')");

header("location:reservation.php");
 }
}
}
if(!($_SESSION['user']))
{
	$_SESSION['use']="First login";
	header("location:reservation.php");
}

?>