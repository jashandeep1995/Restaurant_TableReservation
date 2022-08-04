<?php
ob_start();
session_start();
include_once("database.php");
$l=$_REQUEST['h'];
$q=$_REQUEST['h1'];
if($q=="catgry")
{
$l=$_REQUEST['h'];
$k1=$_REQUEST['category'];
mysql_query("update tb_cat set s_cat='$k1',s_modifiedby='$_SESSION[user]',s_modifieddate='$time' where s_no='$l'");
header("location:index.php?k1=cat");
}
if($q=="subcate")
{
$desct=$_REQUEST['desc'];
$img1=$_FILES['image']['name'];
$path="pro/".$img1;

$l=$_REQUEST['h'];
$catid=$_REQUEST['s1'];
$subcat=$_REQUEST['sub'];


if($img1=="")
{
	mysql_query("update tb_subcat set cat_id='$catid',subcat='$subcat',Description='$desct',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");

}
else
{
mysql_query("update tb_subcat set cat_id='$catid',subcat='$subcat',Image='$img1',Description='$desct',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
move_uploaded_file($_FILES['image']['tmp_name'],$path);
}
header("location:index.php?k1=sub");
}
if($q=="quan")
{
$l=$_REQUEST['h'];
$k1=$_REQUEST['category'];
$x1=mysql_query("select * from tb_quant where quantity='$k1'");
mysql_query("update tb_quant set quantity='$k1',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
header("location:index.php?k1=quanty");
}
if($q=="employ")
{
$nam=$_REQUEST['name'];
$ph=$_REQUEST['phn'];
$det=$_REQUEST['detail'];
$img1=$_FILES['image']['name'];
$path="pro/".$img1;
if($img1=="")
{
	mysql_query("update tb_employee set Name='$nam',Phn_no='$ph',Detail='$det',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
}
else
{
mysql_query("update tb_employee set Name='$nam',Phn_no='$ph',Detail='$det',Image='$img1',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
move_uploaded_file($_FILES['image']['tmp_name'],$path);
}
header("location:index.php?k1=emp");
}
if($q=="price")
{
$typ=$_REQUEST['type'];
$it=$_REQUEST['Item'];
$quan=$_REQUEST['quantity'];
$pr=$_REQUEST['price'];
mysql_query("update tb_price set Type='$typ',Item='$it',Quantity='$quan',Price='$pr',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
header("location:index.php?k1=price");
}
if($q=="gallery")
{
$nam=$_REQUEST['name'];
$img1=$_FILES['image']['name'];
$path="pro/".$img1;
if($img1=="")
{
	mysql_query("update tb_gallery set gallery_name='$nam',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
}
else
{
mysql_query("update tb_gallery set gallery_name='$nam',Image='$img1',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
move_uploaded_file($_FILES['image']['tmp_name'],$path);
}
header("location:index.php?k1=gallery");
}
if($q=="country")
{
$l=$_REQUEST['h'];
$k1=$_REQUEST['country'];
mysql_query("update tb_country set Country='$k1',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
header("location:index.php?k1=country");
}
if($q=="state")
{


$l=$_REQUEST['h'];
$catid=$_REQUEST['s1'];
$subcat=$_REQUEST['sub'];
mysql_query("update tb_state set country_id='$catid',state='$subcat',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");

header("location:index.php?k1=state");
}
if($q=="city")
{
$l=$_REQUEST['h'];
 $catid=$_REQUEST['s1'];
$catid1=$_REQUEST['s2'];
$subcat=$_REQUEST['sub'];
mysql_query("update tb_city set country_id='$catid',state_id='$catid1',city='$subcat',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");

header("location:index.php?k1=city");
}
if($q=="dlvry")
{
$l=$_REQUEST['h2'];
mysql_query("update tb_bill set status=2 where bill_id='$l'");
header("location:index.php?k1=delvry");
}
if($q=="tabletype")
{
$l=$_REQUEST['h'];
$k1=$_REQUEST['category'];
mysql_query("update tb_tabletype set table_type='$k1',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
header("location:index.php?k1=tabletype");
}
if($q=="tableno")
{
$l=$_REQUEST['h'];
$k1=$_REQUEST['category'];
mysql_query("update tb_tableno set table_no='$k1',modified_by='$_SESSION[user]',modified_date='$time' where s_no='$l'");
header("location:index.php?k1=tableno");
}

?>
