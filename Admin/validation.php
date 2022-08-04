<?php
include_once("database.php");
session_start();
ob_start();
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$x=mysql_fetch_array(mysql_query("select * from admin_login where username='$user'&& password='$pass'"));
 if($x)
       {
$_SESSION['user']=$user;
header("location:index.php");
        }
      else 
	    {    
		
	   $_SESSION['email3']="Invalid Username & Password";
   
header("location:login.php");
		}
?>