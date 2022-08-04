<?php
ob_start();
include_once("database.php");
session_start();
$k=$_REQUEST['category'];
$c=$_REQUEST['h1'];
if($c=="catgry"){
$x1=mysql_query("select * from tb_cat where s_cat='$k'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="Category already existed";
	header("location:index.php?k1=cat");
}
else{
 
	  
	  
$y=mysql_query("insert into tb_cat values('','$k','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=cat");
}
}
if($c=="subcate")
{
ob_start();
$subcat=$_REQUEST['sub'];
$cat=$_REQUEST['s1'];
$desct=$_REQUEST['desc'];
$img1=$_FILES['image']['name'];
$path="pro/".$img1;
move_uploaded_file($_FILES['image']['tmp_name'],$path);
$x1=mysql_query("select * from tb_subcat where cat_id='$cat'&& subcat='$subcat'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="SubCategory already existed";
	header("location:index.php?k1=sub");
}
else{
$y=mysql_query("insert into tb_subcat values('','$cat','$subcat','$img1','$desct','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=sub");
}
}
if($c=="quan")
{
$k=$_REQUEST['category'];	
$x1=mysql_query("select * from tb_quant where quantity='$k'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="quantity already existed";
	header("location:index.php?k1=quanty");
}
else{
 /*if($_SESSION['user'])
   {
	   echo $_SESSION['user'];
	    
   }*/
$y=mysql_query("insert into tb_quant values('','$k','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=quanty");
}
}
if($c=="employ")
{
$nam=$_REQUEST['name'];
$ph=$_REQUEST['phn'];
$det=$_REQUEST['detail'];
$img1=$_FILES['image']['name'];
$path="pro/".$img1;
move_uploaded_file($_FILES['image']['tmp_name'],$path);
$x1=mysql_query("select * from tb_employee where Name='$nam'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="User already existed";
	header("location:index.php?k1=emp");
}
else
{
$y=mysql_query("insert into tb_employee values('','$nam','$phn','$det','$img1','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=emp");
}
}
if($c=="price")
{
$typ=$_REQUEST['type'];
$it=$_REQUEST['Item'];
$quan=$_REQUEST['quantity'];
$pr=$_REQUEST['price'];
$x1=mysql_query("select * from tb_price where  Item='$it' && Quantity='$quan'");
//$x1=mysql_query("select * from tb_price where Type='$typ'&& Item='$it'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="Item already existed";
	header("location:index.php?k1=price");
}
else
{
$y=mysql_query("insert into tb_price values('','$typ','$it','$quan','$pr','','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=price");
}
}
if($c=="gallery")
{
$nam=$_REQUEST['name'];
$img1=$_FILES['image']['name'];
$path="pro/".$img1;
move_uploaded_file($_FILES['image']['tmp_name'],$path);
$y=mysql_query("insert into tb_gallery values('','$nam','$img1','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=gallery");
}
if($c=="country"){
	$k=$_REQUEST['country'];
$x1=mysql_query("select * from tb_country where Country='$k'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="Country already existed";
	header("location:index.php?k1=country");
}
else{  
$y=mysql_query("insert into tb_country values('','$k','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=country");
}
}
if($c=="state")
{
ob_start();
$subcat=$_REQUEST['sub'];
$cat=$_REQUEST['s1'];

$x1=mysql_query("select * from tb_state where country_id='$cat'&& state='$subcat'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="State already existed";
	header("location:index.php?k1=state");
}
else{
$y=mysql_query("insert into tb_state values('','$cat','$subcat','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=state");
}
}
if($c=="city")
{
ob_start();
$subcat=$_REQUEST['sub'];
$cat=$_REQUEST['s1'];
$cat1=$_REQUEST['s2'];

$x1=mysql_query("select * from tb_city where country_id='$cat'&& state_id='$cat1' && $city='$subcat'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="city already existed";
	header("location:index.php?k1=city");
}
else{
$y=mysql_query("insert into tb_city values('','$cat','$cat1','$subcat','$_SESSION[user]','$_SESSION[user]','$time','$time')");
header("location:index.php?k1=city");
}
}
if($c=="tabletype"){
$x1=mysql_query("select * from tb_tabletype where table_no='$k'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="already existed";
	header("location:index.php?k1=tabletype");
}
else{
 
	  
	  
$y=mysql_query("insert into tb_tabletype values('','$k','','$_SESSION[user]','','$time','1')");
header("location:index.php?k1=tabletype");
}
}
if($c=="tableno"){
$x1=mysql_query("select * from tb_tableno where table_no='$k'");
if(mysql_num_rows($x1)>0)
{
	$_SESSION['name']="already existed";
	header("location:index.php?k1=tableno");
}
else{	  
$y=mysql_query("insert into tb_tableno values('','$k','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=tableno");
}
}
if($c=="booking"){
$tabletype=$_REQUEST['s1'];
$tableno=$_REQUEST['tablenumber'];
foreach($tableno as $tableno1)
{
	$y=mysql_query("insert into tb_allocate values('','$tabletype','$tableno1','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
	
}  
//$y=mysql_query("insert into tb_allocate values('','$tabletype','$tableno3','$_SESSION[user]','$_SESSION[user]','$time','$time','1')");
header("location:index.php?k1=booking");
}


?>