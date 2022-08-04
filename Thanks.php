<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from lambert.kwst.net/site/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:10:59 GMT -->
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
                    <!--=============== parallax section  ===============-->	
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/33.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2><i>Thank you for your purchase</i></h2>
                             <h3><i>Any items to be shipped will be processed as soon as possible</i></h3>
                        </div>
                    </section>
                    <!--section end-->
                    <!--=============== reservation ===============-->	
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                           <!-- <div class="row">
                                <div class="col-md-12">
                                   <!-- <div class="section-title">
                                        <h4>Reervation info</h4>
                                        <div class="separator color-separator"></div>
                                    </div>-->
                                    <!--<div class="row">
                                        <div class="col-md-12">
                                            
                                        </div>
                                    </div>
                                    <div class="bold-separator">
                                        <span></span>
                                    </div>
                                   <!-- <div class="reservation-form-holder">
                                        <div class="reservation-form">
                                           
                                    </div>
                                </div>-->
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