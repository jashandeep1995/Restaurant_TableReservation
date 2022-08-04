<!DOCTYPE HTML>
<?php
session_start();
?>
<html lang="en">
    
<!-- Mirrored from lambert.kwst.net/site/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:12 GMT -->
<head>
        <!--=============== basic  ===============-->
        <?php include_once("head.php"); ?>
    </head>
    <style>
	.bb
{
	height:40px;
	width:100px !important;
	float:right !important;
	background-color:#000 !important;
	color:#FFF !important;
}
.bb:hover
{
	background-color:#C59D5F !important;
}
.cc{
	text-align:left;
}
	</style>
    <script language="javascript">
	     function mobile1()
		 {
			var str =document.frm.phone.value;
			var n = str.length;
			if(n<10)
			{
				  document.getElementById("mobile").innerHTML="Invalid";
				  document.getElementById("mobile").style.color="red"; 
			}
			else if(isNaN(str))
			{
				 document.getElementById("mobile").innerHTML="Invalid";
				 document.getElementById("mobile").style.color="red"; 
				
			}
			else
			{
				 document.getElementById("mobile").innerHTML="";
			}
			
		 }
		 </script>
    <body>
        <div class="loader"><img src="images/loader.png" alt=""></div>
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <header>
               <?php include_once("header.php"); ?>
               </header>
            <!--header end-->
            <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <div class="content">
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/32.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Our contacts</h2>
                            <h3>Were to find us</h3>
                        </div>
                    </section>
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-details">
                                        <h3>Contact info</h3>
                                        <p>Travel across India with just your five senses and a plate. The JM'S represents Indian food in all its quirkiness and diversity. The Yellow Chilli is a casual restaurant that serves popular Indian food with a twist. </p>
                                        <p> We would love to hear from you. If you need to contact us for any feedback, suggestion, general inquiry or career; Please do fill the form below.</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="contact-details">
                                        <h4>JM'S - Chandigarh</h4>
                                        <ul>
                                            <li><a href="#">Sec-34 SCO-124</a></li>
                                            <li><a href="#">9876544223</a></li>
                                            <li><a href="#">jas@gmail.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="contact-details">
                                        <h4>JM'S - Ludhiana</h4>
                                        <ul>
                                            <li><a href="#">Model town near krishna Mandir</a></li>
                                            <li><a href="#">9856433112</a></li>
                                            <li><a href="#">manpreet@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="contact-details">
                                        <h4>JM'S - Jalandhar</h4>
                                        <ul>
                                            <li><a href="#">Model town Extension</a></li>
                                            <li><a href="#">9867423446</a></li>
                                            <li><a href="#">jashan012345@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h3>Our location</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="no-padding">
                        <div class="map-box">
                            <div class="map-holder" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.1125725492725!2d75.83293661461458!3d30.883511685402258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a824bbc44b709%3A0x3d83e82c34f1fa77!2sInfoTechZone!5e0!3m2!1sen!2sin!4v1447858438623" width="1300" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h3>Get in Touch</h3>
                                        <h4 class="decor-title">Write us</h4>
                                        <div class="separator color-separator"></div>
                                    </div>
                                    <div class="contact-form-holder">
                                        <div id="contact-form">
                                            <div id="message2"></div>
 <form method="post" action="insert_register.php" name="frm">
   <input name="name" type="text" class="name"  placeholder="Name" required="required">
    <input name="email" type="text" class="email" placeholder="E-mail" required="required"> 
      <input name="phone" type="text" class="phone"  placeholder="Phone" onKeyUp="mobile1();" maxlength="10" required="required" ><div id="mobile" class="cc"></div>            
     <textarea name="comments"  class="comments" required>Message</textarea>  
             <input  type="submit" value="Send" class="bb">  
             <input type="hidden" value="contact" name="h1">     										           											
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--=============== footer ===============-->
                <footer>
                <?php include_once("footer.php"); ?>
                </footer>
                <!--footer end --> 
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <?php include_once("script.php"); ?>
    </body>

<!-- Mirrored from lambert.kwst.net/site/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:21 GMT -->
</html>