<style>
.cc{
	color:#C59D5F !important;
	font-size:20px !important;
	font-style:normal !important;
}
</style>
 <div class="footer-inner">
                        <div class="container">
                            <div class="row">
                                <!--tiwtter-->
                                <div class="col-md-4">
                                    <div class="footer-info">
                                        <div class="twitter-holder">

                                            <ul>
                                    <li><a href="index.php" class="cc">Home</a> </li>
                                      <li><a href="shop.php" class="cc">About</a></li>

                                    <li><a href="gallery1.php" class="cc">Menu</a></li>
                                    <li><a href="gallery.php" class="cc">Gallery</a></li>
                                    <li><a href="reservation.php" class="cc">Reservation</a></li>

                                    <li><a href="contact.php" class="cc">Contact</a></li>

                                </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--footer social links-->
                                <div class="col-md-4">
                                    <div class="footer-social">
                                        <h3>Find us</h3>
                                        <ul>
                                            <li><a href="https://www.facebook.com/search/top/?q=Unofficial%3A%20JM%27S%20Restaurent" target="_blank" ><i class="fa fa-facebook"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!--subscribe form-->
                                <div class="col-md-4">
                                    <div class="footer-info">
                                        <h4>Newsletter</h4>
                                        <div class="subcribe-form">
            <form  method="post" action="insert_register.php">
      <input class="enteremail" name="email" id="subscribe-email" placeholder="Your email address.." spellcheck="false" type="text">
      <input type="hidden" name="h1" value="feedback" />
            <button type="submit" id="subscribe-button" class="subscribe-button" style="background-color:#C59D5F"><i class="fa fa-envelope"></i></button>
            <label for="subscribe-email" class="subscribe-message"></label>
            <div class="cc">
            <?php
                                                if($_SESSION['userrr'])
												{
													echo ($_SESSION['userrr']);
													unset($_SESSION['userrr']);
												}
												?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--to top / privacy policy-->
                    <div class="to-top-holder">
                        <div class="container">
                            <p> <span> &#169; JS 2021</span> All rights reserved.</p>
                            <div class="to-top"><span>Back To Top </span><i class="fa fa-angle-double-up"></i></div>
                        </div>
                    </div>
