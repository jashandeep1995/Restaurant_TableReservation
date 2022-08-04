<?php  //include_once("Admin/database.php");
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from lambert.kwst.net/site/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:09:21 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Restaurant Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
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
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/17.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Our Menu</h2>

                        </div>
                    </section>
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="gallery-filters">
                                <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">All</a>
                                <?php
								$cat=mysql_query("select * from tb_cat");
								while($cat_name=mysql_fetch_array($cat))
								{

								?>
                                <a href="#" class="gallery-filter " data-filter=".menu<?php echo $cat_name['s_no'];?>"><?php echo $cat_name['s_cat'];?></a>
                               <?php
								}
								?>
                            </div>
                            <div class="bold-separator"><span></span></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="gallery-items three-coulms grid-small-pad popup-gallery">
                                        <!-- 1 -->

                                        <?php
										$pro=mysql_query("select * from tb_price GROUP BY Item");
										while($pro_name=mysql_fetch_array($pro))
										{
											$get_image=mysql_fetch_array(mysql_query("select * from tb_subcat where s_no='$pro_name[Item]'"));
											$path="Admin/pro/".$get_image['Image'];
											$type=mysql_fetch_array(mysql_query("select * from tb_cat  where s_no=$pro_name[Type]"));

										?>
                                        <div class="gallery-item menu<?php echo $pro_name['Type'];?> product-cat-mains">
                                            <a href="<?php echo $path;?>"><img src="<?php echo $path;?>" alt="" class="respimg"></a>
                                   			 <h4 class="product-title"><a href="#"><?php echo $get_image['subcat'];?></a></h4>
                                                <?php /*?><ul class="product-cats">
                                                    <li><a href="#"><?php echo $type['s_cat'];?></a></li>

                                                </ul><?php */?>

                                                <div class="product-price" style=" font-size:22px;">
                                                    <!--<span><?php //echo $pro_name['Price'];?></span>-->
                                                    <form action="product.php" >
                                                    <input type="hidden" name="h1" value="<?php echo $get_image['s_no'];?>">
                                                      <input type="hidden" name="h2" value="<?php echo $get_image['cat_id'];?>">
                                                  <input type="submit" value="Add To Cart" style=" background:#000; padding:10px 60px;
                                                  color:#C59D5F; border:1px solid #C59D5F; border-top-left-radius:20px;border-bottom-right-radius:20px; font-style:italic;">
                                                </form>
                                                </div>
                                        </div>
                                        <?php
										}
										?>
                                        <!-- 2 -->

                                        <!-- 3 -->

                                        <!-- 8 -->

                                    </div>
                                    <!-- end gallery items -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--=============== testimonials ===============-->
                    <section class="parallax-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Testimonials</h2>
                            <h3>What said about us</h3>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="testimonials-holder">
                                        <div class="customNavigation">
                                            <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                            <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="testimonials-slider owl-carousel">
                                            <div class="item">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                                <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                            </div>
                                            <div class="item">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li> <i class="fa fa-star-half"></i></li>
                                                </ul>
                                                <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                                <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                            </div>
                                            <div class="item">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <p>" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
                                                <h4><a href="https://twitter.com/katokli3mmm" target="_blank">Jone Doe</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-icon"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </section>
                    <!--section end-->
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

<!-- Mirrored from lambert.kwst.net/site/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:10:59 GMT -->
</html>
