<?php
include_once("database.php");
$k4=$_REQUEST['k2'];
$k5=$_REQUEST['h1'];
if($k5=="cat")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_cat where s_no='$k4'");
$w=mysql_query("delete from tb_subcat where cat_id='$k4' ");
$y=mysql_query("delete from tb_price where Type='$k4' ");
header("location:index.php?k1=cat");
}
if($k5=="subcat")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_subcat where s_no='$k4'");
header("location:index.php?k1=sub");
}
if($k5=="quan")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_quant where s_no='$k4'");
header("location:index.php?k1=quanty");
}
if($k5=="employ")
{
	
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_employee where s_no='$k4'");
header("location:index.php?k1=emp");
}
if($k5=="price")
{
	
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_price where s_no='$k4'");
header("location:index.php?k1=price");
}
if($k5=="gallery")
{
	
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_gallery where s_no='$k4'");
header("location:index.php?k1=gallery");
}
if($k5=="country")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_country where s_no='$k4'");

header("location:index.php?k1=country");
}
if($k5=="state")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_state where s_no='$k4'");
header("location:index.php?k1=state");
}
if($k5=="city")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_city where s_no='$k4'");
header("location:index.php?k1=city");
}
if($k5=="tabletype")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_tabletype where s_no='$k4'");
header("location:index.php?k1=tabletype");
}
if($k5=="tableno")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_tableno where s_no='$k4'");
header("location:index.php?k1=tableno");
}
if($k5=="booking")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_allocate where s_no='$k4'");
header("location:index.php?k1=booking");
}
if($k5=="letter")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_email where s_no='$k4'");
header("location:index.php?k1=letter");
}
if($k5=="writeus")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_contact where s_no='$k4'");
header("location:index.php?k1=writeus");
}
if($k5=="rev")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_reviews where s_no='$k4'");
header("location:index.php?k1=rev");
}
if($k5=="res")
{
$k4=$_REQUEST['k2'];
$z=mysql_query("delete from tb_reservation where s_no='$k4'");
header("location:index.php?k1=res");
}
?>