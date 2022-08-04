<?php
ob_start();
session_start();
include_once("Admin/database.php");
 $id=$_REQUEST['h1'];
 $quan=$_REQUEST['qty'];
$chkvalue=$_REQUEST['chkvalue'];
foreach($chkvalue as $chkvalue1)
{
	$chkvalue2.=$chkvalue1.",";
}
$chkvalue3=rtrim($chkvalue2,","); 
foreach($quan as $quan1)
{
	$quan2.=$quan1.",";
}
$quan3=rtrim($quan2,","); 
if($_SESSION['user'])
{
	$session=$_SESSION['user'];
}
else
{
	$session=$_SERVER['REMOTE_ADDR'];
}
$x1=mysql_fetch_array(mysql_query("select * from tb_temp where product_id='$id' && quantity='$chkvalue3'"));
//echo "select * from tb_temp where product_id='$id' && quantity='$chkvalue3'";
$total=$x1['Total'];
if($x1)
{
	 $total+$quan3;
	 $quan4=$total+$quan3;
	mysql_query("update tb_temp set Total='$quan4'");
	
	header("location:cart.php?k1=$id");
}
else
{
//$quantity=mysql_fetch_array(mysql_query("select quantity from tb_quant where s_no=$id"));
$y=mysql_query("insert into tb_temp values('','$id','$chkvalue3','$quan3','$session','$time','1')");
header("location:cart.php?k1=$id");
}
?>