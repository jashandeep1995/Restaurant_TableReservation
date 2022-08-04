<?php
session_start();
//include_once("Admin/database.php");
//$fet_re=mysql_fetch_array(mysql_query("select * from tb_reviews"));
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

    <?php include_once("head.php");?>
    </head>
    <style>
	.mm
	{
		font-size:30px;
		font-weight:500;

	}
	</style>
    <body>
        <div class="loader"><img src="images/loader.png" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->
            <header>
               <?php include_once("header.php")?>
            </header>
            <!--header end-->
            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!--=============== Hero content ===============-->
                <div class="content full-height hero-content">
                    <div class="slideshow-container" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                        <!-- slideshow -->
                     <div class="slides-container">
                            <!-- 1 -->
                            <div class="bg" style="background-image: url(images/bg/1.jpg)"></div>
                            <!-- 2 -->
                            <div class="bg" style="background-image: url(images/bg/28.jpg)"></div>
                            <!-- 3 -->
                            <div class="bg" style="background-image: url(images/bg/8.jpg)"></div>
                        </div>
                        </div>
                        <div class="hero-title-holder">
                            <div class="overlay"></div>
                            <div class="hero-title">
                                <div class="hero-decor b-dec">
                                    <div class="half-circle"></div>
                                </div>
                                <div class="separator color-separator"></div>
                                <h3>Welcome to JM'S</h3>
                                <!--<h4>Responsive restaurant  template</h4>-->
                            </div>
                        </div>
                        <div class="hero-link">
                            <a class="custom-scroll-link" href="#sec1"><i class="fa fa-angle-double-down"></i></a>
                        </div>
                </div>
                <!--hero end-->
                <div class="content">
                    <!--=============== About ===============-->
                    <section class="about-section" id="sec1">
                        <div class="container">
                            <div class="row">
                                <!--about text-->
                                <div class="col-md-6">
                                    <div class="section-title">
                                        <h3>Discover</h3>
                                        <h4 class="decor-title">Our story</h4>
                                        <div class="separator color-separator"></div>
                                    </div>
                                    <p>Travel across India with just your five senses and a plate. The JM'S represents Indian food in all its quirkiness and diversity. The Yellow Chilli is a casual restaurant that serves popular Indian food with a twist.
Our goal at our Restaurant is to provide a high-quality, family dining experience at affordable prices.</p>
              <p> With a variety of dishes specially designed by Chef Sanjeev Kapoor during his travel across India, The JM'S provides a veritable gastronomic tour of India with destinations that showcase the quintessential dishes of each region.</p>
                                    <a href="menu.php" class="link ajax">Discover our menu</a>
                                </div>
                                <!-- about images-->
                                <div class="col-md-6">
                                    <div class="single-slider-holder">
                                        <div class="customNavigation">
                                            <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                            <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                        </div>
                                        <div class="single-slider owl-carousel">
                                            <!-- 1 -->
                                            <div class="item">
          <img src="Admin/pro/peda.jpg" class="respimg" alt="">
                                            </div>
                                            <!-- 2 -->
                                            <div class="item">
                                                <img src="Admin/pro/butter-chicken.jpg" class="respimg" alt="">
                                            </div>
                                            <!-- 3 -->
                                            <div class="item">
                                                <img src="images/bg/15.jpg" class="respimg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--=============== Opening Hours ===============-->
                    <section class="parallax-section">
                        <div class="media-container video-parallax" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                           	<div class="bg mob-bg" style="background-image: url(images/bg/18.jpg)"></div>
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
                    <!--section end-->
                    <!--=============== About 2 ===============-->
                    <section class="about-section">
                        <!-- triangle decoration-->
                        <div class="triangle-decor">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-slider-holder">
                                        <div class="customNavigation">
                                            <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                            <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                        </div>
                                        <div class="single-slider owl-carousel">
                                            <!-- 1 -->
                                            <div class="item">
                                                <img src="images/slider/3.jpg" class="respimg" alt="">
                                            </div>
                                            <!-- 2 -->
                                            <div class="item">
                                                <img src="images/slider/2.jpg" class="respimg" alt="">
                                            </div>
                                            <!-- 3 -->
                                            <div class="item">
                                                <img src="images/slider/1.jpg" class="respimg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section-title">
                                        <h3>Our restorans</h3>

                                        <div class="separator color-separator"></div>
                                    </div>
                                    <p>Our restaurant brands are built on key customer insights. The Indian dining experience where food is synonymous with entertainment is our chief inspiration. The culinary and experiential diversity of these restaurant brands reflect the rich diversity of those who visit our restaurants.
</p>
   <p>At each of our restaurant brands, the experience differs. All the details are linked to the brand experience- the menu, ambience, team culture and even the marketing. We believe that focusing on enhancing our guest experience will help create brands that have the greatest impact on our customers.</p>
                                    <a href="gallery.php" class="link">View gallery</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
                    <!--=============== Weekly Deals ===============-->
                    <section class="parallax-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/8.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Weekly Deals</h2>

                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- 1 -->
                                    <div class="promotion-item">
                                        <div class="promotion-title">
                                            <h4>Monday</h4>
                                            <span></span>
                                        </div>
                                        <div class="promotion-details">
                                            <div class="promotion-desc">Chiken Korma</div>
                                            <div class="promotion-dot"></div>
                                            <div class="promotion-prices mm"><b>Rs.220</b></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="col-md-12">
                                    <div class="promotion-item">
                                        <div class="promotion-title">
                                            <h4>Tuesday</h4>
                                            <span></span>
                                        </div>
                                        <div class="promotion-details">
                                            <div class="promotion-desc">Shahi Tukda</div>
                                            <div class="promotion-dot"></div>
                                            <div class="promotion-prices mm"><b>Rs.130</b></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="col-md-12">
                                    <div class="promotion-item">
                                        <div class="promotion-title">
                                            <h4>Wednesday</h4>
                                            <span></span>
                                        </div>
                                        <div class="promotion-details">
                                            <div class="promotion-desc">Firni</div>
                                            <div class="promotion-dot"></div>
                                            <div class="promotion-prices mm"><b>Rs.30</b></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="col-md-12">
                                    <div class="promotion-item">
                                        <div class="promotion-title">
                                            <h4>Sunday </h4>
                                            <span></span>
                                        </div>
                                        <div class="promotion-details">
                                            <div class="promotion-desc">Mutton Korma</div>
                                            <div class="promotion-dot"></div>
                                            <div class="promotion-prices mm"><b>Rs.299</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="reservation.php" class="align-link link">Online Reservation</a>
                        </div>
                    </section>
                    <!--section end-->
                    <!--=============== team ===============-->
                    <!--<section id="sec3">
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="section-title">
                                <h3>Our Team</h3>
                                <h4>High-class professional service</h4>
                                <div class="separator color-separator"></div>
                            </div>

                            <div  class="team-links">
                                <!-- member 1 link
                                <div class="team-item">
                                    <a href="team/mem1.php" class="popup-with-move-anim">
                                    <span class="team-details">More info</span>
                                    <img src="Admin/pro/photo-sanjay.png" alt="" class="respimg">
                                    <span class="chefname">Sanjay Thumma</span>
                                    <span class="chefinfo"></span>
                                    </a>
                                </div>
                                <!-- member 2 link
                                <div class="team-item">
                                    <a href="team/mem2.php" class="popup-with-move-anim">
                                    <span class="team-details">More info</span>
                                    <img src="Admin/pro/2.jpg" alt="" class="respimg">
                                    <span class="chefname">Sanjeev Kapoor</span>
                                    <span class="chefinfo"></span>
                                    </a>
                                </div>
                                <!-- member 3 link
                                <div class="team-item">
                                    <a href="team/mem3.php" class="popup-with-move-anim">
                                    <span class="team-details">More info</span>
                                    <img src="Admin/pro/3.jpg" alt="" class="respimg">
                                    <span class="chefname">Maneet Chauhan </span>
                                    <span class="chefinfo"></span>
                                    </a>
                                </div>
                                <!-- member 4 link
                                <div class="team-item">
                                    <a href="team/mem4.php" class="popup-with-move-anim">
                                    <span class="team-details">More info</span>
                                    <img src="Admin/pro/4.jpg" alt="" class="respimg">
                                    <span class="chefname">Nikita Gandhi</span>
                                    <span class="chefinfo"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
                    <!--=============== testimonials ===============-->
                    <section>
                    </section>
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
                                                <p>" We'll tell you that we're the best Indian restaurant in town – but don't take our work for it – read what some of our customer have said about us...."</p>
                                                <h4><a href="" target="_blank"></a></h4>
                                            </div>
                                            <div class="item">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li> <i class="fa fa-star-half"></i></li>
                                                </ul>
                                                <p>"<?php echo $fet_re['comment'];?> "</p>
                                                <h4><a href="https://www.facebook.com/profile.php?id=100009822915072&fref=ts" target="_blank"><?php echo  $fet_re['name'];?></a></h4>
                                            </div>
                                            <div class="item">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <p>" Wow! New restaurant in town wins my heart. One of only 2 restaurants we now visit. We're loyal followers and come to dine at least twice a month. Come and taste JM's great food for yourself! "</p>
                                                <h4><a href="https://www.facebook.com/?q=#/search/top/?q=Roop%20Mangat&ref=eyJzaWQiOiIwLjQ2MTY4ODM1ODQyNDUzNTgiLCJxcyI6IkpUVkNKVEl5VW05dmNDVXlNRTFoYm1kaGRDVXlNaVUxUkEiLCJndiI6IjI5ZjRhZGI2NjcyZTMwYTBjYzA2ZDA0ZTQxM2JhMDFlYzgzODg1MmYifQ" target="_blank">Rupinder Kaur</a></h4>
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

<!-- Mirrored from lambert.kwst.net/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:07:07 GMT -->
</html>
