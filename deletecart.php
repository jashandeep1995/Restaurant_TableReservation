<?php
ob_start();
session_start();
include_once("Admin/database.php");
$id1=$_REQUEST['k1'];
$z=mysql_query("delete from tb_temp where s_no='$id1'");
header("location:cart.php");
?>