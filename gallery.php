<?php
//include_once("Admin/database.php");
session_start();

?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from lambert.kwst.net/site/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:09:21 GMT -->
<head>
         <?php include_once("head.php");?>
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
                            <h2>Our gallery</h2>
                            <h3>Booking a table online is easy</h3>
                        </div>
                    </section>
                    <section>

                        <div class="triangle-decor"></div>

                        <div class="container">

                            <div  class="gallery-filters">
							<?php
                             $pro=mysql_query("select * from tb_gallery GROUP BY gallery_name");
							 while($cat=mysql_fetch_array($pro)){


								 $gallery=$cat['gallery_name'];

							 ?>
                               <!-- <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">All</a>-->
                                <a href="#"  class="gallery-filter" data-filter=".menu"><?php echo $gallery;?> </a>
                              <!--  <a href="#" class="gallery-filter" data-filter=".rest">Restaurant</a>
                                <a href="#" class="gallery-filter" data-filter=".ovid">Video</a>--><?php }?>
                            </div>

                            <div class="bold-separator"><span></span></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="gallery-items three-coulms grid-small-pad popup-gallery">

                                        <?php
                                        $pro=mysql_query("select * from tb_gallery");
										while($img2=mysql_fetch_array($pro)){
										$img3="Admin/pro/".$img2['Image'];
										?>
                                        <div class="gallery-item  menu">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="<?php echo $img3;?>">
                                                    <span class="overlay"></span>
                                                    <i class="fa fa-search"></i>
                                                    <img  src="<?php echo $img3;?> "   alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>

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
