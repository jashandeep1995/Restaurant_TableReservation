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

$x1=mysql_query("select * from tb_temp where product_id='$id' and session='$session'");
$x11=mysql_fetch_array($x1);

$fet_qty=explode(",",$x11['quantity']);
$fet_qty_value=explode(",",$x11['Total']);
$qty_lvl=count($fet_qty);
if(mysql_num_rows($x1)>0)
{
	foreach($chkvalue as $keyy=>$chkvalue1)
	{
		if(in_array($chkvalue1, $fet_qty))
		{
			foreach($fet_qty as $keyyy=>$fet_qty1)
			{
				if($chkvalue1==$fet_qty1)
				{
					$fet_qty_value[$keyyy]=$fet_qty_value[$keyyy]+$quan[$keyy];
				}
			}
		}
		else
		{
			$fet_qty[$qty_lvl]=$chkvalue1;
			$fet_qty_value[$qty_lvl]=$quan[$keyy];
			$qty_lvl++;	
		}
	}
	
	foreach($fet_qty as $fet_qty1)
	{
		$qty_id.=$fet_qty1.",";
	}
	echo $qty_id=trim($qty_id,",");
	echo "<br/>";
	foreach($fet_qty_value as $fet_qty_value1)
	{
		$qty_of_items.=$fet_qty_value1.",";
	}
	echo $qty_of_items=trim($qty_of_items,",");

	mysql_query("update tb_temp set quantity='$qty_id', Total='$qty_of_items' where product_id='$id' and session='$session'");
}
else
{

/*$total=$x1['Total'];
if($x1)
{
	 $total+$quan3;
	 $quan4=$total+$quan3;
	
	
	header("location:cart.php?k1=$id");
}
else
{
*///$quantity=mysql_fetch_array(mysql_query("select quantity from tb_quant where s_no=$id"));


$y=mysql_query("insert into tb_temp values('','$id','$chkvalue3','$quan3','$session','$time','1')");
}
header("location:cart.php?k1=$id");

//}
?>