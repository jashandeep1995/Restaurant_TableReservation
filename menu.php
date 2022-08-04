<?php
// include_once("Admin/database.php");
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from lambert.kwst.net/site/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:07:25 GMT -->
<head>
         <?php include_once("head.php");?>
    </head>
    <style>
	.mm
	{
		float:none !important;
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
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/14.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Hot dishes</h2>

                        </div>
                    </section>


                    <section>
                        <div class="triangle-decor"></div>
                        <div class="menu-bg lbd" style="background-image:url(images/menu/1.png)" data-top-bottom="transform: translateX(200px);" data-bottom-top="transform: translateX(-200px);">
                        </div>
                        <div class="container">
                            <div class="separator color-separator"></div>
                            <div class="menu-holder">
                                <div class="row mm">
                                   <div class="col-md-12 mm">

<div class="menu-item">

    <div class="menu-item-details">

        <div class="menu-item-desc mm"><a href="product.php?h1=<?php echo Momos;?></h1></a></div>

        <div class="menu-item-dot"></div>
        <div class="menu-item-prices">
      <div class="menu-item-price">Rs.<?php echo 20;?></div>
        </div>

    </div>
<p> <?php      echo Good to Eat;?></p>
</div>
 <?php } ?>


    </div>




                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                        </div>
                    </section>
                    <section class="parallax-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/17.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Dessert</h2>
                            <h3>Aenean ultricies mi vitae est</h3>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="menu-bg rbd" style="background-image:url(images/menu/2.png)" data-top-bottom="transform: translateX(-200px);" data-bottom-top="transform: translateX(200px);"></div>
                        <div class="container">
                            <div class="separator color-separator"></div>
                            <div class="menu-holder">
                          <div class="row">





                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                        </div>
                    </section>
                    <section class="parallax-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/20.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Beverages</h2>

                            <div class="bold-separator">
                                <span></span>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="menu-bg lbd" style="background-image:url(images/menu/3.png)" data-top-bottom="transform: translateX(200px);" data-bottom-top="transform: translateX(-200px);">
                        </div>

                        <div class="container">
                            <div class="separator color-separator"></div>
                            <div class="menu-holder">
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>

                                </div>
                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                        </div>
                    </section>
                </div>

                <footer>
                    <?php include_once("footer.php");?>
                </footer>

            </div>

        </div>

        <?php include_once("script.php");?>
    </body>


</html>
