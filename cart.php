<?php 
session_start();
include_once("Admin/database.php");
$h11=$_REQUEST['k1'];


?>
<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from lambert.kwst.net/site/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:35 GMT -->
<head>
        <?php include_once("head.php");?>
        <style>
.bb
{
	width:150px !important;
	float:right !important;
	background-color:#000 !important;
	color:#FFF !important;
	height:40px;
	margin-top:20px;
	border-radius:8px;
}
.bb:hover
{
	background-color:#C59D5F !important;
}
</style>
    </head>
    <body>
        <div class="loader"><img src="images/loader.png" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <header>
                 <div class="header-inner">
                    <div class="container">
                        <!--navigation social links-->
                        <div class="nav-social">
                            <ul>
                                <?php if($_SESSION['user'])
                            {?>
                              <ul>
                                 <li><strong><?php  echo ($_SESSION['user']);?></strong></li>
                                   <li><strong>|</strong></li>
                                    <li><a href="sessiondestroy.php"   class="act-link"><strong>Logout</strong></a></li>
                            </ul>
                            <?php }?>
                            
                             <?php if(!($_SESSION['user']))
                            {?>
                               
                                 <ul>
                                 <li><a href="login.php"   class="act-link"><strong>Login</strong></a></li>
                                   <li class="act-link"><strong>|</strong></li>
                                    <li><a href="login.php"   class="act-link"><strong>Register</strong></a></li>
                            </ul>
                           <?php } ?>
                            </ul>
                        </div>
                        <!--logo-->             
                        <div class="logo-holder">
                            <a href="index.php">
                            <img src="images/logo.png" class="respimg logo-vis" alt="">
                            <img src="images/logo2.png" class="respimg logo-notvis" alt="">
                            </a>
                        </div>
                        <!--Navigation -->
                        <div class="subnav">
                            <a href="cart.php"><i class="fa fa-shopping-cart"></i>( <span>2</span> )</a>
                        </div>
                        <div class="nav-holder">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a> </li>
                                      <li><a href="shop.php">About</a></li>                                      
   
                                    <li><a href="gallery1.php">Menu</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="reservation.php">Reservation</a></li>
                                   
                                    <li><a href="contact.php">Contact</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!--header end-->
            <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <div class="content">
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/21.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Your cart</h2>
                            <h3>Order online is easy</h3>
                        </div>
                    </section>
                    <section>
                    	<div class="triangle-decor"></div>
                        <div class="container">
                            <!-- CHECKOUT TABLE -->
                            <div class="row">
                                <div class="col-sm-12">
                                  
									      
										 
										  
										 
									   
									      
									      
                                    <table class="table table-border checkout-table">
                                        <tbody>
                                            <tr>
                                                <th class="hidden-xs">Item</th>
                                                <th>Name</th>
                                                <th class="hidden-xs">Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                             <?php
											 if($_SESSION['user'])
											 {
												 $user=$_SESSION['user'];
											 }
											 else
											 {
												 $user=$_SERVER['REMOTE_ADDR'];
											 }
									   
									   $x=mysql_query("select * from tb_temp where session='$user'");
									   
                                       while($x1=mysql_fetch_array($x))
									   {
										 
										   $get_image=mysql_fetch_array(mysql_query("select * from tb_subcat where s_no='$x1[product_id]'"));
										 $img3="Admin/pro/".$get_image['Image'];
										 
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
                                                    <a href="#"><img src="<?php echo $img3;?>" alt="" class="respimg"></a>
                                                </td>
                                                <td>
                                                    <h5 class="product-name"><?php echo $get_image['subcat']; ?> </h5>
                                                </td>
                                                <td class="hidden-xs">
                                                    <h5 class="order-money"><?php echo $h11;?></h5>
                                                </td>
                                                <td>
                                                    <h5 class="product-name"><?php 
													foreach($qty_m as $qty_m1=>$de)
										  			{ echo $get_qty[$qty_m1]."<br/>";} ?> </h5>
                                                </td>
                                                <td>
                                                    <h5 class="order-money"><?php echo $get_price11;?> </h5>
                                                </td>
                                                <td class="pr-remove">
                                                    <a href="deletecart.php?k1=<?php echo $x1['s_no'];?>" title="Remove"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /CHECKOUT TABLE -->
                            <!-- COUPON -->
                            <div class="row">
                                <div class="coupon-holder">
                                   <!-- <div class="col-md-12">
                                        <input type="text" name="" placeholder="Coupon code">
                                        <button type="submit" class="btn-a">Apply</button>
                                        <!--<button type="submit" class="pull-right btn-uc">Update Cart</button>
                                    </div>-->
                                </div>
                            </div>
                            <!-- /COUPON -->
                            <!-- CART TOTALS  -->
                            <div class="row">
                                <div class="col-sm-5 col-sm-offset-7">
                                    <div class="cart-totals">
                                        <h4>Cart Totals</h4>
                                        <form action="<?php if($_SESSION['user']){ echo 'address.php';}else{echo 'login.php';}?>" method="post"> 
                                        <table class="table table-border checkout-table">
                                            <tbody>
                                                <tr>
                                                    <th>Cart Subtotal:</th>
                                                    <th>Shipping Total:</th>
                                                    <th>Total:</th>
                                                     
                                                </tr>
                                                  
                                                <?php 
										 
										 $x=mysql_query("select * from tb_temp where session='$user'");
									   
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
											
											  
										  }}
										  $h11=rtrim($hh,",");
									       $get_price11=rtrim($get_price11,",");
									   
									   ?>
                                         <tr>
                                           <td><?php echo $total_price;?></td>
                                           <td>Rs.150</td>
                                           <td><?php echo $to=$total_price+150;?></td>
                                         </tr>
                                             <?php  ?>
                                            </tbody>
                                        </table>
                                        <input type="submit" value="Proceed to checkout" class="bb">
                                        <input type="hidden" value="cart" name="jump"> 
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /CART TOTALS  -->
                        </div>
                    </section>
                </div>
                <!--=============== footer ===============-->
                <footer>
                    <?php include_once("footer.php");?>
                </footer>
                <!--footer end --> 
            </div>
            <!-- wrapper end -->
        </div>
        <?php include_once("script.php");?>
    </body>

<!-- Mirrored from lambert.kwst.net/site/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:35 GMT -->
</html>