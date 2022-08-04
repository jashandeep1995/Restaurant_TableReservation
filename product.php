<?php
include_once("Admin/database.php");
session_start();
$id=$_REQUEST['h1'];
$id1=$_REQUEST['h2'];
$c=mysql_fetch_array(mysql_query("select * from tb_cat where s_no=$id1"));
$cat=mysql_fetch_array(mysql_query("select * from tb_subcat where s_no=$id"));
$img3="Admin/pro/".$cat['Image'];
$price=mysql_fetch_array(mysql_query("select * from tb_price where s_no=$id"));
$quanty=mysql_fetch_array(mysql_query("select * from tb_quant where s_no=$price[Quantity];"));
$fet_re=mysql_query("select * from tb_reviews where product_id=$id LIMIT 6");
 	
?>


<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from lambert.kwst.net/site/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:35 GMT -->
<head>
       <?php include_once("head.php");?>
       <style>
	   .bb
{
	border-radius:2px;
	height:30px; !important;
	width:120px !important;
	float:right !important;
	background-color:#000 !important;
	color:#FFF !important;
}
.bb:hover
{
	background-color:#C59D5F !important;
}
.a
{
	
	height:40px;
	width:50px;
}
.aa
{
	margin-top:30px;
}
.ccc
{
	font-size:20px;
	margin-top:20px;
	font-style:italic;
	font-weight:200;
}

	   </style>
    </head>
    <body>
        <div class="loader"><img src="images/loader.png" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->
            <header class="flat-header">
                <div class="header-inner">
                    <div class="container">
                        <!--navigation social links-->
                        <div class="nav-social">
                            <?php if($_SESSION['user'])
                            {?>
                              <ul>
                                 <li><a href="login.php"   class="act-link"><strong><?php  echo ($_SESSION['user']);?></strong></a></li>
                                   <li><a href="login.php"   class="act-link"><strong>|</strong></a></li>
                                    <li><a href="sessiondestroy.php"   class="act-link"><strong>Logout</strong></a></li>
                            </ul>
                            <?php }?>
                            
                             <?php if(!($_SESSION['user']))
                            {?>
                               
                                 <ul>
                                 <li><a href="login.php?jump=product&h2=<?php echo $id1;?>&h4=<?php echo $id;?>"   class="act-link"><strong>Login</strong></a></li>
                                   <li><a href="login.php"   class="act-link"><strong>|</strong></a></li>
                                    <li><a href="login.php"   class="act-link"><strong>Register</strong></a></li>
                            </ul>
                           <?php } ?>
                        </div>
                        <!--logo-->
                        <div class="logo-holder">
                            <a href="index.php">
                            <img src="images/logo2.png" class="respimg" alt="">
                            </a>
                        </div>
                        <!--Navigation -->
                        <div class="subnav">
                            <a href="cart.php"><i class="fa fa-shopping-cart"></i><?php $i=0; 
							   if($_SESSION['user'])
				                {
					             $user=$_SESSION['user'];
																			  
								}
							 else
							{
							$user=$_SESSION['REMOTE_ADDR'];
							}
			$item=mysql_query("select * from tb_temp where session='$user'");
				while($item12=mysql_fetch_array($item))
							{
						$i++;
						}
					?>
			<span><?php echo $i; ?> </span> </a>
                        </div>
                        <div class="nav-holder">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="gallery1.php">Menu</a></li>
                                    <li><a href="gallery.php" class="act-link">Gallery</a></li>
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
                    <section>
                        <div class="container">
                            <div class="product-meta">
                                <span class="posted_in">Category : <a href="#"><?php echo $c['s_cat'];?></a>  , <a href="#"><?php echo $cat['subcat'];?></a></span>
                            </div>
                            <div class="product-item-holder">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product-image">
                                            <div class="customNavigation">
                                                <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                                <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                            </div>
                                            <div  class="owl-carousel product-slider">
                                                <div><img src="<?php echo $img3;?> " alt=""  class="respimg"></div>
                                                <!--<div><img src="images/gallery/2.jpg" alt=""  class="respimg"></div>
                                                <div><img src="images/gallery/3.jpg" alt=""  class="respimg"></div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-item">
                                            <h2 class="product_title"><?php echo $cat['subcat'];?></h2>
                                            <div class="pr-opt">
                                             
                                               <!-- <div class="product-item-price">
                                     
                                               
                                                </div>
                                                 <!--<div class="product-item-price"></div>-->
                                                
                                                <!--<div class="product-rating">
                                                    <span>( 2 customer reviews )</span>
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>-->
                                            </div>
                                            <div id="tabs-container">
                                                <ul class="tabs-menu">
                                                    <li class="current"><a href="#tab-1">Description</a></li>
                                                    <li><a href="#tab-2">Reviews</a></li>
                                                </ul>
                                                <div class="tab">
                                                    <div id="tab-1" class="tab-content">
                                                        <p> <?php echo $cat['Description'];?> </p>
                                                    
                                                     <div class="product-item-price">
                                                     <form method="post" action="insert1.php">
                                                  <table style="width:100%;padding:20px;">
                                                  <tr>
                                                  <th></th>
                                                  <th>Quantity</th>
                                                  <th>Price</th>
                                                  <th>Qty</th>
                                                  </tr>
                                                  <?php 
												  $i=1;
											    $get_qty_id1=mysql_query("select * from tb_price where Item='$cat[s_no]'");
												while($get_qty_id=mysql_fetch_array($get_qty_id1))
												{
													$get_qty_value=mysql_fetch_array(mysql_query("select * from tb_quant where s_no='$get_qty_id[Quantity]'"));
												
												
												?>
                                                   <tr>
                                                   <td><input type="checkbox" name="chkvalue[]" value="<?php echo $get_qty_value['s_no'];?>" id="chk<?php echo $i;?>" onClick="chang('chk<?php echo $i;?>','qty<?php echo $i;?>')"></td>
                                                    <td><?php echo ucfirst($get_qty_value['quantity']);?></td>
                                                   <td><?php echo $get_qty_id['Price']; ?></td>
                                                   <td>
                                                   <input type="number" style="width:50px;" name="qty[]" value="1" min="1" max="1000"  id="qty<?php echo $i;?>" disabled>
                                                   <input type="hidden" value="<?php echo $id;?>" name="id">
                                                   </td>
                                                   </tr>
                                                   <?php
												   $i++;
												    } ?>
                                                   </table><br>
                                                      <input type="hidden" name="h1" value="<?php echo $id;?>">
                                                      <input type="hidden" name="h3" value="<?php  echo $quanty['quantity']; ?>">
                                                  <input type="submit" value="Add To Cart" style=" background:#000; padding:10px 100px; 
                                                  color:#C59D5F; border:1px solid #C59D5F; border-top-left-radius:20px;border-bottom-right-radius:20px; font-style:italic;">
                                       
                                                   </form>
                                                   </div>
                                                   </div>
                                                   </div>
                                                    <div id="tab-2" class="tab-content">
                                                        <div id="comments">
                                                            <!--title-->
                                                            <h6 id="comments-title">Comments <span></span></h6>
                                                            <?php 
															while($fet_rev=mysql_fetch_array($fet_re)){
																$img2="Admin/pro/".$fet_rev['Image']
																
																?>
                                                            <ul class="commentlist clearafix">
                                                                <li class="comment">
                                                                    <div class="comment-body">
                                                                        <div class="comment-author">
                                                                            <img alt="" src="<?php echo $img2;?>" width="50" height="50">
                                                                        </div>
                                                                        <cite class="fn"><a href="#"><?php echo $fet_rev['name'];?></a></cite>
                                                                        <div class="comment-meta">
                                                                            <h6><a href="#"><?php echo $fet_rev['date']; ?> at <?php echo $fet_rev['time'];?></a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                                                        </div>
                                                                        <p><?php echo $fet_rev['comment'];?></p>
                                                                    </div>
                                                                </li>
                                                               
                                                            </ul>
                                                            <div class="clearfix"></div><?php } ?>
                                                            <div id="respond" class="clearafix">
                                                                <h6 id="reply-title">Leave A Comment</h6>
                                                                <div class="comment-reply-form clearfix">
   <form action="<?php if($_SESSION['user']){ echo 'insert_register.php';}else{ $_SESSION['u']="First Login";
                                   
   }?>" method="post" id="commentform" class="form-horizontal" name="commentform" enctype="multipart/form-data">
               <div class="comment-form-author control-group">
                    <div class="controls">
  <input id="author" name="author" type="text" value="" size="40" aria-required="true" />
                                                                            </div>
       <label class="control-label" for="author">Name </label>
                                                                        </div>
             
              <div class="comment-form-email control-group">
                          <div class="aa">
  <input type="file" name="image"    aria-required="true" />
                                                                            </div>
       <!-- <label class="control-label" for="email">Image</label>-->
                                                                        </div>
             
              <div class="comment-form-email control-group">
                          <div class="controls">
  <input id="email" name="email" type="text" value="" size="40" aria-required="true" />
                                                                            </div>
        <label class="control-label" for="email">Email </label>
                                                                        </div>
         <div class="comment-form-comment control-group">
                             <div class="controls">
  <textarea id="comment" name="comment" cols="50" rows="8" aria-required="true" placeholder="Your comment here..">
                                                                                </textarea>
                                                                            </div>
                                                                        </div>
                                  <div class="form-submit">
                                    <div class="controls">
                      <input type="submit" class="bb" value="Post a Comment">
                     
                      <div class="ccc">
                     <?php   echo $_SESSION['u'];
			         unset($_SESSION['u'])?></div>
               <input type='hidden' name='h1' value="reviews" id='comment_post_ID'>
             <input type='hidden' name='h2' value="<?php echo $id1;?>">
              <input type='hidden' name='h4' value="<?php echo $id;?>">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!--end respond-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity">
                                                <!--<input type="button" value="-" class="minus">-->
                                               
                                            </div>
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="bold-separator">
                                        <span></span>
                                    </div>
                                    <div class="section-title">
                                        <h3>Related Products</h3>
                                        <h4>You may also like</h4>
                                        <div class="separator color-separator"></div>
                                    </div>
                                    
                                    <ul class="products">
                                        <?php 
                             $pro=mysql_query("select * from tb_subcat where cat_id='$c[s_no]' LIMIT 3");
							 while($cat=mysql_fetch_array($pro)){
								 $subcat=$cat['subcat'];
								  $img3="Admin/pro/".$cat['Image'];
								 
                                    ?>
                                        <li class="product-cat-mains">
                                            <a href="product.php?h1=<?php echo $cat['s_no'];?>&h2=<?php echo $cat['cat_id'];?>"><img src="<?php echo $img3;?>" alt="" class="respimg"></a>
                                            <h4 class="product-title"><a href="product.php"><?php echo $subcat;?></a></h4>
                                            <ul class="product-cats">
                                                <li><a href="#"><?php echo $c['s_cat'];?></a></li>
                                                
                                            </ul>
                                            <div class="product-price">
                                               
                                               <form action="product.php" >
                                                    <input type="hidden" name="h1" value="<?php echo $cat['s_no'];?>">
                                                      <input type="hidden" name="h2" value="<?php echo $cat['cat_id'];?>">
                                                  <input type="submit" value="Add To Cart" style=" background:#000; padding:10px 60px; 
                                                  color:#C59D5F; border:1px solid #C59D5F; border-top-left-radius:20px;border-bottom-right-radius:20px; font-style:italic;">
                                                </form>
                                            </div>
                                        </li>
                                       <!-- <li class="product-cat-mains">
                                            <a href="product.php"><img src="images/gallery/2.jpg" alt="" class="respimg"></a>
                                            <h4 class="product-title"><a href="product.php">Steak & Creamy Mash</a></h4>
                                            <ul class="product-cats">
                                                <li><a href="#">Main Meals</a></li>
                                                <li><a href="#">Hot Dishes</a></li>
                                            </ul>
                                            <div class="product-price">
                                                <span>$27</span>
                                                <a href="#">Add to cart</a>
                                            </div>
                                        </li>
                                        <li class="product-cat-mains">
                                            <a href="product.php"><img src="images/gallery/3.jpg" alt="" class="respimg"></a>
                                            <h4 class="product-title"><a href="product.php">Steak & Creamy Mash</a></h4>
                                            <ul class="product-cats">
                                                <li><a href="#">Main Meals</a></li>
                                                <li><a href="#">Hot Dishes</a></li>
                                            </ul>
                                            <div class="product-price">
                                                <span>$27</span>
                                                <a href="#">Add to cart</a>
                                            </div>
                                        </li>-->
                                        <?php } ?>
                                    </ul>
                                   
                                </div>
                            </div>
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
        <!-- Main end -->
        <!--=============== google map ===============-->
        <?php include_once("script.php");?>
    </body>

<!-- Mirrored from lambert.kwst.net/site/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:35 GMT -->
</html>
<script>
function chang(chkk, qtty)
{
	var checkin=document.getElementById(chkk).checked;
	if(checkin==true)
	{
		document.getElementById(qtty).disabled=false;
	}
	else
	{
		document.getElementById(qtty).disabled=true;
	}
}
</script>