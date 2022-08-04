<?php
session_start();
include_once("Admin/database.php");
$fet_add=mysql_fetch_array(mysql_query("select * from tb_address where Email='$_SESSION[user]'"));
 $cat=mysql_fetch_array(mysql_query("select * from tb_state where s_no='$fet_add[State]'"));
 $bill_pro=mysql_fetch_array(mysql_query("select * from tb_bill where session='$_SESSION[user]'"));

?>

<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from lambert.kwst.net/site/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:10:59 GMT -->
<head>
        <?php include_once("head.php");?>
            <script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	</script>
        </head>
		    
		
        
<style>
.add h3 {
	float:left;
	width:100%;
	margin-bottom:30px;
	text-align:left;
	font-size:20px;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:1px;
	font-family: 'Source Sans Pro', sans-serif;
}
.bb{

text-align:left !important;
}
.bbb
{
	border:4px solid red;
}
 .bb2
{
	
	width:130px !important;
	float:left !important;
	background-color:#000 !important;
	color:#FFF !important;
	height:45px !important;
	border-radius:6px;
	margin-top:7px;
	font-weight:bold;
	font-style:italic;
	font-family:Arial, Helvetica, sans-serif;
	
}
.bb2:hover
{
	background-color:#C59D5F !important;
}

</style> 

    <body>
        <div class="loader"><img src="images/loader.png" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <header>
                 <?php include_once("header.php");?>
            </header>
            <!--header end-->
            <!--=============== wrapper ===============-->	
             
            <div id="wrapper">
                <div class="content">
                    <!--=============== parallax section  ===============-->	
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/33.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                         <div id="p1">
                           <h2>Bill info</h2>
                            
                        </div>
                    </section>
                    <!--section end-->
                    <!--=============== reservation ===============-->	
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row" style="border:1px solid black" id="p111">
                                <div class="col-md-12">
                                    <div class="section-title">
                                       <div id="p1">
                                        <h3>Bill info</h3>
                                        
                                    <!--<div class="row">
                                        <!--<div class="col-md-12">
                                            <div class="inner">
                                               
                                            </div>
                                        </div>
                                    </div>-->
                                   
                                    <div class="reservation-form-holder" >
                                        <div class="reservation-form">
                                            <div id="message"></div>
                                            <form method="post" action="#" name="frm" class="add">
                                                <div class="row">
                                                <div class="bb">
                                               
                                                    <div class="col-md-8">
                                                    
                                                        <h4 class="bb">AWB No:<?php echo $bill_pro['bill_id'];?></h4><br>
                                                        <h4 class="bb">Name & delievery Address:</h4>
                                                         <p>Name: &nbsp &nbsp<?php echo $fet_add['Name'];?></p>
                                                         <p>LastName:  &nbsp &nbsp<?php echo $fet_add['Lname'];?></p>
                                                         <p>Phone: &nbsp &nbsp<?php echo $fet_add['Phn'];?></p>
                                                         <p>State: &nbsp &nbsp<?php echo $cat['state'];?></p>
                                                         <p>Address: &nbsp &nbsp<?php echo $fet_add['Address'];?></p>
                                                         <h4 align="left">Payment mode:</h4>
                                                         <p>Ehealthrich Retail Private Limited, Warehouse: 16, Street no 11, Haripur, Sector 4, Panchkula – 134112 Haryana</p>
                                                          <p>Order Id: &nbsp &nbsp<?php echo $bill_pro['product_id'];?></p>
                                                         <p>Order Date:&nbsp &nbsp<?php echo $bill_pro['date'];?></p>
                                                         <p>Invoice No: &nbsp &nbsp<?php echo $bill_pro['s_no'];?></p>
                                                         <p>Invoice Date:&nbsp &nbsp<?php echo $bill_pro['date'];?></p><br>
                                                         <p><b>Order details:</b></p>
                                                           <table class="table table-border checkout-table">
                                            <tbody>
                                                <tr>
                                                    <th>Srno.</th>
                                                    <th>Product</th>
                                                    <th>MRP</th>
                                                      <th>Quantity</th>
                                                        <th>Total</th>
                                                        
                                                        
                                                   <?php

									     $xy=1;
									   $x=mysql_query("select * from tb_bill where session='$_SESSION[user]' and status=1");
									   
                                       while($x1=mysql_fetch_array($x))
									   {
										 
				
										  $get_image=mysql_fetch_array(mysql_query("select * from tb_subcat where s_no='$x1[product_id]'"));
										   $hh=NULL;
										   $fetch_price1=NULL;
										   $get_price11=NULL;
									      $qty_m=explode(",",$x1['quantity']);
										 $get_qty=explode(",",$x1['Total']);
										  foreach($qty_m as $qty_m1=>$de)
										  {
											
										   $get_qty_name=mysql_fetch_array(mysql_query("select * from tb_quant where s_no='$de'"));
											$get_price=mysql_fetch_array(mysql_query("select * from tb_price where Quantity='$de' and Item='$x1[product_id]'"));
											 
											 $hh.=$get_qty_name['quantity'].": &nbsp;&nbsp;".$get_price['Price']."<br/>";
											
											
							 
											$fetch_price1=$get_price['Price']*$get_qty[$qty_m1];
										
											$get_price11.=$fetch_price1."<br/>";
											
											  
										  }
										  $h11=rtrim($hh,",");
									       $get_price11=rtrim($get_price11,"<br/>");
										
										 
                                      ?> 
                                            <tr>
                                                <td class="hidden-xs">
                                                    <?php echo $xy; ?> 
                                                </td>
                                                <td>
                                                    <h5 class="product-name"><?php echo $get_image['subcat']; ?> </h5>
                                                </td>
                                                <td class="hidden-xs">
                                                    <h5 class="order-money"><?php echo $h11;?></h5>
                                                </td>
                                                <td>
                                                    <h5 class="product-name"><?php foreach($qty_m as $qty_m1=>$de)
										  { echo $get_qty[$qty_m1]."<br/>";} ?> </h5>
                                                </td>
                                                <td>
                                                    <h5 class="order-money"><?php echo $get_price11;?> </h5>
                                                </td>
                                               
                                            </tr>
                                             <?php $xy++;}?>
                                            
                                     
            
                                                     
                                              
                                                </tbody>
                                                </table><br>
                                                 <p><b>Order details:</b></p>
                                                 <table class="table table-border checkout-table">
                                            <tbody>
                                                <tr>
                                                    <th>Total</th>
                                                    <th>Shipment Charges</th>
                                                    <th>COD charges</th>
                                                     
                                                        <th>GrandTotal</th>
                                                     
                                                </tr>
                                                 <?php 
										 
										 $x=mysql_query("select * from tb_bill where session='$user' and status=1");
									   
                                       while($x1=mysql_fetch_array($x)){ 
									      $hh=NULL;
										   $fetch_price1=NULL;
										   $get_price11=NULL;
									      $qty_m=explode(",",$x1['quantity']);
										 $get_qty=explode(",",$x1['Total']);
										  foreach($qty_m as $qty_m1=>$de)
										  {
											
										   
											$get_price=mysql_fetch_array(mysql_query("select * from tb_price where Quantity='$de' and Item='$x1[product_id]'"));
											 
											 $hh.=$get_price['Price'].",";
											
											
							 
											$fetch_price1=$get_price['Price']*$get_qty[$qty_m1];
										     $total_price=$total_price+$fetch_price1;
										$get_price11.=$fetch_price1.",";
											
											  
										  }
										  $h11=rtrim($hh,",");
									       $get_price11=rtrim($get_price11,",");
									   }
									   ?>
                                               
		
                                         <tr>
                                           <td  class="order-money"><?php echo $total_price; ?></td>
                                           <td  class="order-money">Rs.150</td>
                                           <td  class="order-money">Rs.50</td>
                                           <td  class="order-money"><?php $to=$total_price+150+50; echo $to;?></td>
                                         </tr>
                                            <?php ?>
                                                </tbody>
                                                </table><br><br>
                                                <p align="center">This is a computer generated invoice. No signature required.</p>
                                                
                                                 <h4 align="left">Terms & Conditions:</h4>
                                                 <p><b>Note:</b><br>
                                                 1.All disputes will be subjected to Panchkula jurisdiction only.<br>
                                                 2.All amounts are in INR.<br>
                                                    </p>   
                                                        <!--date-->
                                                    
                                                        <!--restaurant-->                                      
                                                       <!-- <select class="form-control" id="resrest" onClick="this.select()">
                                                            <option value="Lambert - New York City">Lambert  - Chandigarh</option>
                                                            <option value="Lambert - Washington">Lambert - Mohali</option>
                                                            <option value="Lambert - Florida ">Lambert - Ludhiana</option>
                                                        </select>
                                                        <!--person-->    
                                                       <!-- <select id="numperson" class="form-control" onClick="this.select()" >
                                                            <option value="1">1 Person</option>
                                                            <option value="2">2 People</option>
                                                            <option value="3">3 People</option>
                                                            <option value="4">4 People</option>
                                                            <option value="5">5 People</option>
                                                            <option value="6">6 People</option>
                                                        </select>-->
                                                    </div>
                                                   
                                        </div>        
                                        </div>
                                        </div>
                                        
                                       
                                    </div>  
                                                                        
                                    <button onClick="printContent('p111')"  class="bb2">Print Content</button>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->                 
                    <!--=============== Opening Hours ===============-->	
                    <section class="parallax-section" id="sec2">
                        <div class="media-container video-parallax" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
							<div class="bg mob-bg" style="background-image: url(images/bg/22.jpg)"></div>
                            <div class="video-container">
                                <video autoplay  loop muted  class="bgvid">
                                    <source src="video/1.html" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Opening Hours</h2>
                            <h3>Call For Reservations</h3>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="work-time">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Sunday to Tuesday</h3>
                                        <div class="hours">
                                            09:00AM<br>
                                            11:00PM
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Friday to Saturday</h3>
                                        <div class="hours">
                                            11:00AM<br>
                                            05:00PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="big-number"><a href="#">9876474112</a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--content end-->
                <!--=============== footer ===============-->
                <footer>
                     <?php include_once("footer.php");?>
                </footer>
                <!--footer end --> 
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <?php include_once("script.php");?>
    </body>

<!-- Mirrored from lambert.kwst.net/site/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:08 GMT -->
</html>