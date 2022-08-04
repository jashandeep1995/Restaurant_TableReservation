<?php
include_once("Admin/database.php");
ob_start();
session_start();
$id=$_REQUEST['h1'];
$pro_id=$_REQUEST['h2'];
//$jump=$_REQUEST['jump'];

$pro_idd=$_REQUEST['h4'];
if($id=="reg")
{
$name=$_REQUEST['name'];
$lname=$_REQUEST['lname'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$x=mysql_query("select * from tb_register where email='$email' ");
if(mysql_num_rows($x)>0)
{   
	$_SESSION['s']="Already Registered!";
	
	header("location:login.php");
}
else
{
$_SESSION['user']=$email;
$y=mysql_query("insert into tb_register values('','$name','$lname','$phone','$email','$pass','$time','1')");
mysql_query("update tb_temp set session='$_SESSION[user]' where session='$_SERVER[REMOTE_ADDR]'"); 
if($_REQUEST['jump']=="cart")
{
header("location:cart.php");	
}
else{
header("location:index.php");
}
}
}


if($id=="login")
{ 
 $user=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$x=mysql_query("select * from tb_register where Email='$user' and Password='$pass'");
if(mysql_num_rows($x)>0)
 {
$_SESSION['user']=$user;
mysql_query("update tb_temp set session='$_SESSION[user]' where session='$_SERVER[REMOTE_ADDR]'");


if($_REQUEST['jump']=="cart"){ header("location:cart.php");}
else{
 header("location:index.php");	
}
}
else 
{    
$_SESSION['email3']="Invalid Username & Password";
   
header("location:login.php");
}
}


if($id=="address")
{
$nam=$_REQUEST['name'];
$lnam=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$phno=$_REQUEST['phone1'];
$cntry=$_REQUEST['country'];
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$landmark=$_REQUEST['landmark'];
$pin=$_REQUEST['pin'];
$address=$_REQUEST['Address'];
$x=mysql_query("select * from tb_address where Email='$_SESSION[user]'");
if(mysql_num_rows($x)>0)
{
mysql_query("update tb_address set Name='$nam',Lname='$lnam',Phn='$phno',Pin='$pin',Country='$cntry',State='$state',City='$city',Address='$address',Landmark='$landmark' where Email='$_SESSION[user]'");
}
else{
$y=mysql_query("insert into tb_address values('','$nam','$lnam','$email','$phno','$pin','$cntry','$state','$city','$landmark','$address','$_SESSION[user]','','$time','1')");	
//mysql_query("update tb_address set Name='$nam',Lname='$lnam',Phn='$phno',Pin='$pin',Country='$cntry',State='$state',City='$city',Address='$address',Landmark='$landmark' where Email='$_SESSION[user]'");
//$get_product=mysql_query("select * from tb_temp where session='$_SESSION[user]'");
}
$get_product=mysql_query("select * from tb_temp where session='$_SESSION[user]'");

$Rx=rand(1,100000);
 $Rx1="prod_".$Rx;
$_SESSION['bill_id']=$Rx1;
while($get_product1=mysql_fetch_array($get_product))
{
$y=mysql_query("insert into tb_bill values('','$_SESSION[bill_id]','$get_product1[product_id]','$get_product1[quantity]','$get_product1[Total]','$get_product1[session]','$get_product1[date]','$get_product1[status]')");
}
mysql_query("delete from tb_temp where  session='$_SESSION[user]' ");
header("location:bill.php");
}

if($id=="reviews")
{
$name=$_REQUEST['author'];
$email=$_REQUEST['email'];
$comment=$_REQUEST['comment'];
$img1=$_FILES['image']['name'];
$path="Admin/pro/".$img1;
$x=mysql_query("select * from tb_reviews where session='$_SESSION[user]' and product_id='$pro_idd'");
if(mysql_num_rows($x)>0)
{
	$z=mysql_query("update tb_reviews set comment='$comment',time='$time',date='$date',Image='$img1' where session='$_SESSION[user]' and product_id='$pro_idd'");
     move_uploaded_file($_FILES['image']['tmp_name'],$path);
	 header("location:product.php?h1=$pro_idd&h2=$pro_id");
}
else
{
$y=mysql_query("insert into tb_reviews values('','$name','$img1','$email','$comment','$pro_idd','$time','$date','$_SESSION[user]','1')");
move_uploaded_file($_FILES['image']['tmp_name'],$path);
header("location:product.php?h1=$pro_idd&h2=$pro_id");
}
}
if($id=="contact")
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$comments=$_REQUEST['comments'];
$y=mysql_query("insert into tb_contact values('','$name','$email','$phone','$comments','$_SESSION[user]','$time','1')");
header("location:contact.php");
}
if($id=="feedback")
{
$email=$_REQUEST['email'];
$x=mysql_query("select * from tb_email where email='$email' ");
if(mysql_num_rows($x)>0)
{
	$_SESSION['userrr']="ALready Existed";
	header("location:index.php");
}
else{
$y=mysql_query("insert into tb_email values('','$email','$time','$_SESSION[user]','','','1')");
header("location:index.php");
}
}
?>