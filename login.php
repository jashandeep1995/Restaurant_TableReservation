<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from lambert.kwst.net/site/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:12 GMT -->
<head>
         <?php include_once("head.php");?>
         <style>
		 .bb{

		float:left !important;
	width:600px !important;
	height:40px !important;
	border-radius:4px !important;
	margin-top:2px !important;
	border:1px solid #CCC !important;
		 }
		  .bb1{

		float:left !important;
	width:600px !important;
	height:40px !important;
	border-radius:4px !important;
	margin-top:20px !important;
	border:1px solid #CCC !important;
		 }


		 .bb2
{

	width:130px !important;
	float:right !important;
	background-color:#000 !important;
	color:#FFF !important;
	height:45px !important;
	border-radius:6px;
	margin-top:7px;
}
.bb2:hover
{
	background-color:#C59D5F !important;
}
.bb3
{
	margin-top:50px;
	font-size:20px;
	font-weighht:100px;
	font-style:italic;
	Color:#000;s
}

		 </style>

         <script language="javascript">

         function check()
         {
           u=document.form.email.value;
           v=document.form.pass.value;
           if(u==""|v=="")
           {
             document.getElementById("uv").innerHTML="Please Enter the required Fields";
             document.getElementById("uv").style.color="red";
             document.getElementById("uv").style.text="bold";
             return false;
           }

         }

		   function fn()
		   {
			   var p=document.frm.pass.value;
			   var r=document.frm.Retype.value;

				if(p!=r)
			   {
				   document.getElementById("aa").innerHTML="password Mismatch";
				   document.getElementById("aa").style.color="red";
			   }
			   else
			   {
				    document.getElementById("aa").innerHTML="";
			   }
		   }
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
                        <div class="bg bg-parallax" style="background-image:url(images/bg/32.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h3>Login Portal</h3>
                        </div>
                    </section>
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-details contact-form-holde">
                                        <div id="contact-form">
                                        <h3>Login</h3>
                                            <div id="message2"></div>
                                            <form method="post" action="insert_register.php" onsubmit="return check()" name="form">

                                                <input name="email" type="text" class="email" placeholder="Email">
                                                <input name="pass" type="password" class="bb" placeholder="Password">

                                               <input type="submit"  name="submit" value="submit" class="bb2">
                                                 <!--<input type="hidden" value="<?php //echo $_REQUEST['jump']?>" name="jump">-->
                                                <div id="uv"></div>
                                                <div class="bb3"><?php
                                                if($_SESSION['email3'])
												{
													echo ($_SESSION['email3']);
													unset($_SESSION['email3']);
												}
												?>
                                               </div>

                                                <input name="h1" type="hidden" value="login" >

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                 <div class="contact-details contact-form-holde">
                                    <div id="contact-form">
                                        <h3>Register here</h3>
                                            <div id="message2"></div>
                                            <form method="post" action="insert_register.php" name="frm">
                                                <input name="name" type="text" class="name"   placeholder="Name" >
                                                   <input name="lname" type="text" class="name"   placeholder="Last-Name" >

                                                <input name="phone" type="text" class="phone"  placeholder="Phno" maxlength="10" onKeyUp="mobile1();">
                                                <div id="mobile"></div>
                                                <input name="email" type="text" class="email"  placeholder="E-mail" required>

                                                  <input name="pass" type="password" class="bb"  placeholder="Password" >
                                                    <input name="Retype" type="password" class="bb1"  placeholder="Retype-Password" onKeyUp="fn();" >
                                                      <div id="aa"></div>
                                                     <br><br><br><br>

                                                <!-- <input name="h1" type="hidden" value="reg" >
                           <input type="hidden" value="<?php //echo $_REQUEST['jump']?>" name="jump">-->
                                                 <input type="submit"  name="submit" value="submit" class="bb2">

                                                <div class="bb3">
                                                <?php
                                                if($_SESSION['s'])
												{
													echo ($_SESSION['s']);
													unset($_SESSION['s']);
												}
												?>
                                                </div>
                                            </form>
                                        </div>
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
                                <div  id="map-canvas"></div>
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
                                            <form method="post" action="http://lambert.kwst.net/site/php/contact.php" name="contactform" id="contactform">
                                                <input name="name" type="text" class="name"  value="Name" >
                                                <input name="email" type="text" class="email"  value="E-mail" >
                                                <input name="phone" type="text" class="phone"  value="Phone" >
                                                <textarea name="comments"  class="comments"  >Message</textarea>
                                               <input type="submit"  name="submit" value="Send" class="bbb">
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

<!-- Mirrored from lambert.kwst.net/site/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:11:21 GMT -->
</html>
