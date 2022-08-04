<?php
include_once("Admin/database.php");
?>
<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from lambert.kwst.net/site/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:08 GMT -->
<head>
       <?php include_once("head.php");?>
    </head>
    <body>
        <div class="loader"><img src="images/loader.png" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <header>
                <?php include_once("header2.php");?>
            </header>
            <!--header end-->
            <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <div class="content">
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/21.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Our shop</h2>
                            <h3>Order online is easy</h3>
                        </div>
                    </section>
                    <section>
                    	<div class="triangle-decor"></div>
                        <div class="container">
                            <div class="section-title">
                                <h4>Shop Information</h4>
                            </div>
                            <div class="inner">
                                <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <select name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                          
                            <ul class="products">
                                 <?php 
                             $pro=mysql_query("select * from tb_subcat");
							 while($cat=mysql_fetch_array($pro)){
								 $subcat=$cat['subcat'];
								  $img3="Admin/pro/".$cat['Image'];
								  $desc=$cat['Description'];
								$price=mysql_fetch_array(mysql_query("select * from tb_price where s_no=$cat[cat_id]"));
								$quantity=mysql_fetch_array(mysql_query("select * from tb_quant where $cat[cat_id]"));
								$type=mysql_fetch_array(mysql_query("select * from tb_cat  where s_no=$cat[cat_id]"));
								
								
								
								 
							 ?>
                              
                                <li class="product-cat-mains">
                                   
                                    <a href="product.php?k2=<?php echo $img3;?>"><img src="<?php echo $img3;?>" alt="" class="respimg"></a>
                                    <h4 class="product-title"><a href="product.php?k1=<?php echo $cat['s_no'];?>"><?php echo $subcat;?></a></h4>
                                    <ul class="product-cats">
                                        <li><a href="#"><?php echo $type['s_cat']; ?></a></li>
                                       
                                    </ul>
                                    <div class="product-price">
                                        <span><?php echo $price['Price'];?></span>
                                        <a href="insert.php?k1=<?php echo $cat['s_no'];?>&k2=<?php echo $quantity['quantity'];?>">Add to cart</a>
                                    </div>
                                </li>
                                <?php } ?>
                                <!--shop item-->
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
                                </li>
                                                                    
                                <li class="product-cat-mains">
                                    <a href="product.php"><img src="images/gallery/4.jpg" alt="" class="respimg"></a>
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
                                    <a href="product.php"><img src="images/gallery/5.jpg" alt="" class="respimg"></a>
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
                                </li>-->
                            </ul>
                           
                            <div class="content-pagination">
                                <a href="#" class="prevposts-link transition"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="transition">1</a>
                                <a href="#" class="current-page transition">2</a>
                                <a href="#" class="transition">3</a>
                                <a href="#" class="nextposts-link transition"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </section>
                </div>
               
                <footer>
                     <?php include_once("footer.php");?>
                </footer>
                <!--footer end --> 
            </div>
            <!-- wrapper end -->
        </div>
        <?php include_once("script.php");?>
    </body>

<!-- Mirrored from lambert.kwst.net/site/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:12 GMT -->
</html>