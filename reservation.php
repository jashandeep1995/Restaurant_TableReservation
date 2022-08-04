<?php
session_start();

//include_once("Admin/database.php");
?>

<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from lambert.kwst.net/site/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:10:59 GMT -->
<head>
        <?php include_once("head.php");?>
        </head>
        <style>
.mm
{
	width: 100% !important;
	background:none !important;
	margin-bottom:20px !important;
	font-size: 14px !important;
	height:40px !important;
	border-radius: none !important;
	position:relative !important;
	z-index:20 !important;
	padding-left:8px !important;
	color:#000 !important;
	border:0 !important;
	border:1px solid #ccc !important;
	border-radius:4px !important;

}
.mm h3 {
	float:left !important;
	width:100% !important;
	margin-bottom:30px !important;
	text-align:left !important;
	font-size:20px !important;
	text-transform:uppercase !important;
	font-weight:bold !important;
	letter-spacing:1px !important;
	font-family: 'Source Sans Pro', sans-serif !important;
}
.bb
{
	height:40px !important;
	width:100px !important;
	float:right !important;
	background-color:#000 !important;
	color:#FFF !important;
	border-radius:4 px;
	font-style:italic;
}
.bb:hover
{
	background-color:#C59D5F !important;
}
.p
{
	margin-top:70px;
	font-size:20px;
	color:#C59D5F !important;
}

.cc
{
	margin-top:-40px;
	font-size:17px;
	margin-left:40px;
}
.ccc
{
	margin-left:500px;
}
.cccc
{
	font-size:20px;
	margin-top:20px;
	font-style:italic;
	font-weight:200;
}
.l{
	color:#C59D5F !important;
	font-size:40px !important;
	font-style:normal !important;
    float:left;
	margin-bottom:40px;
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
                    <!--=============== parallax section  ===============-->
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/33.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <h2>Make online reservation <?php echo $_REQUEST['time']
?></h2>
                            <h3>Booking a table online is easy</h3>
                        </div>
                    </section>
                    <!--section end-->
                    <!--=============== reservation ===============-->
                    <section>
                        <div class="triangle-decor"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h4>Reervation info</h4>
                                        <div class="separator color-separator"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inner">
                                                <p>Travel across India with just your five senses and a plate. The JM'S represents Indian food in all its quirkiness and diversity. The Yellow Chilli is a casual restaurant that serves popular Indian food with a twist.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bold-separator">
                                        <span></span>
                                    </div>
                                    <div class="reservation-form-holder">
                                        <div class="reservation-form">
                                            <div id="message"></div>

                                            <form method="post" action="next.php" name="reservationform">


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h2 class="l">Book a table</h2>
                                                        <!--date-->
                                                       <select id="numperson" class="form-control mm" name="guest" required="required">
                                                         <option selected="selected" value="" disabled="disabled">No. of Guests</option>
                                                            <option value="1" <?php if($_REQUEST['guest']=="1"){ ?>selected='selected'<?php } ?>>1 People</option>
                                                            <option value="2" <?php if($_REQUEST['guest']=="2"){ ?>selected='selected'<?php } ?>>2 People</option>
                                                            <option value="3" <?php if($_REQUEST['guest']=="3"){ ?>selected='selected'<?php } ?>>3 People</option>
                                                            <option value="4" <?php if($_REQUEST['guest']=="4"){ ?>selected='selected'<?php } ?>>4 People</option>
                                                            <option value="5" <?php if($_REQUEST['guest']=="5"){ ?>selected='selected'<?php } ?>>5 People</option>
                                                            <option value="6" <?php if($_REQUEST['guest']=="6"){ ?>selected='selected'<?php } ?>>6 People</option>
                                                            <option value="7" <?php if($_REQUEST['guest']=="7"){ ?>selected='selected'<?php } ?>>7 Person</option>
                                                            <option value="8" <?php if($_REQUEST['guest']=="8"){ ?>selected='selected'<?php } ?>>8 People</option>
                                                            <option value="9" <?php if($_REQUEST['guest']=="9"){ ?>selected='selected'<?php } ?>>9 People</option>
                                                            <option value="10" <?php if($_REQUEST['guest']=="10"){ ?>selected='selected'<?php } ?>>10 People</option>
                                                            <option value="11" <?php if($_REQUEST['guest']=="11"){ ?>selected='selected'<?php } ?>>11 People</option>
                                                            <option value="12" <?php if($_REQUEST['guest']=="12"){ ?>selected='selected'<?php } ?>>12 People</option>
                                                        </select>
                                                        <input name="resdate" class="myInput mm" id="resdate" data-lang="en" data-years="2015-2016" data-format="YYYY-MM-DD" data-sundayfirst="false" value="<?php echo $date;?>" onClick="this.select()" placeholder="Date" required>
                                                        <!--time-->
        <select class="form-control mm" name="restime" value="" required="required">

                                                            <option  value="7:00am" <?php if($_REQUEST['time']=="7:00am"){ ?>selected='selected'<?php } ?>>7:00 am</option>
                                                            <option value="7:30am" <?php if($_REQUEST['time']=="7:30am"){ ?>selected='selected'<?php } ?>>7:30am</option>
                                                            <option value="8:00am" <?php if($_REQUEST['time']=="8:00am"){ ?>selected='selected'<?php } ?>>8:00am</option>
                                                            <option value="8:30am" <?php if($_REQUEST['time']=="8:30am"){ ?>selected='selected'<?php } ?>>8:30am</option>
                                                            <option value="9:00am" <?php if($_REQUEST['time']=="9:00am"){ ?>selected='selected'<?php } ?>>9:00 am</option>
                                                            <option value="9:30am" <?php if($_REQUEST['time']=="9:30am"){ ?>selected='selected'<?php } ?>>9:30 am</option>
                                                            <option value="10:00am" <?php if($_REQUEST['time']=="10:00am"){ ?>selected='selected'<?php } ?>>10:00 am</option>
                                                            <option value="10:30am" <?php if($_REQUEST['time']=="10:30am"){ ?>selected='selected'<?php } ?>>10:30 am</option>
                                                            <option value="11:00am" <?php if($_REQUEST['time']=="11:00am"){ ?>selected='selected'<?php } ?>>11:00 am</option>
                                                            <option value="11:30am" <?php if($_REQUEST['time']=="11:30am"){ ?>selected='selected'<?php } ?>>11:30 am</option>
                                                            <option value="12:00pm" <?php if($_REQUEST['time']=="12:00pm"){ ?>selected='selected'<?php } ?>>12:00 pm</option>
                                                            <option value="12:30pm" <?php if($_REQUEST['time']=="12:30pm"){ ?>selected='selected'<?php } ?>>12:30 pm</option>

                                                        </select>
                                                        <input type="hidden" name="h1" value="table">
                                                        <input type="hidden" name="h2" value="find">

														<input type="submit"  name="ss" value="Find_table" class="bb"><br><br>
                                                           <input type="submit"  id="submit-res" value="Make a reservation" class="ccc">
                                                           <div class="cc">
                                                           <?php echo ($_SESSION['use']);
													unset($_SESSION['use']);?> </div>
                                                          <div class="cc">
                                                            <?php echo ($_SESSION['userr']);
													unset($_SESSION['userr']);?> </div>
                                                           </form></div>
												 <div class="col-md-6 p">
												<?php
												$re=$_REQUEST['ss'];
												if($re){



								  $guest1=$_REQUEST['guest'];

								   if($guest1<=2 and $guest1>0){

									 $chk=mysql_query("select * from tb_tabletype where table_type='2'");
								   }
								    else if($guest1>2 and $guest1<=4)
								   {

									  $chk=mysql_query("select * from tb_tabletype where table_type='4'");
								   }
								    else if($guest1>4 and $guest1<=6)
								   {

									  $chk=mysql_query("select * from tb_tabletype where table_type='6'");
								   }
								    else if($guest1>6 and $guest1<=12)
								   {

									  $chk=mysql_query("select * from tb_tabletype where table_type='12'");
								   }
								   else
								   {
									 $chk=mysql_query("select * from tb_tabletype where table_type='0'");


								   }






                               if(mysql_num_rows($chk)>0)
							   {
									// $chk=mysql_query("select * from tb_tabletype where table_type='2'");
									 while($chk1=mysql_fetch_array($chk))
									 {


											  $chk3=mysql_query("select * from tb_allocate where table_type='$chk1[s_no]'");
									  while($chk4=mysql_fetch_array($chk3))
									 {

									 ?>
                                    <center> <table border="1px"><tr><td>
                                     <?php echo "Table no : ";echo $chk4['table_no'];?>   &nbsp&nbsp;</td>
									<td><input type="radio"  value="<?php echo $chk4['table_no'];?>" name="c1"></td>&nbsp &nbsp &nbsp &nbsp;
                                    <?php }


									}

							   }

								 }
									?>
                                    </tr>
                                    </table></center>



                          </div>









                                                    </div>

                                                </div>

                                            <!--</form>-->
                                        </div>
                                    </div>
                                </div>
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
