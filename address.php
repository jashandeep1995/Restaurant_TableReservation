<?php
session_start();
include_once("Admin/database.php");
$fet_add=mysql_fetch_array(mysql_query("select * from tb_address where Email='$_SESSION[user]'"));

?>

<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from lambert.kwst.net/site/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2015 04:10:59 GMT -->
<head>
        <?php include_once("head.php");?>
		      <script src="cat.js"></script> 
		
        
<style>
.bb
{
	width:100px !important;
	float:right !important;
	background-color:#000 !important;
	color:#FFF !important;
}
.bb:hover
{
	background-color:#C59D5F !important;
}
.add input , .add select , .add textarea
{
		float:left;
	width: 100%;
	background:none;
	margin-bottom:20px;
	font-size: 14px;
	height:40px;
	border-radius: none;
	position:relative;
	z-index:20;
	padding-left:8px;
	color:#000;
	border:0;
	border:1px solid #ccc;
	border-radius:4px;
}
.add h3 {
	float:left;
	width:100%;
	margin-bottom:30px;
	text-align:left;
	font-size:20px;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:1px;
	font-family: 'Source Sans Pro', sans-serif;
}
.zz
{
	text-align:left;
	
}


</style>    
<script language="javascript">
	     function mobile1()
		 {
			var str =document.frm.phone1.value;
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
		 function pin1()
		 {
			 
			 var str=document.frm.pin.value;
			 if(isNaN(str))
			{
				 document.getElementById("mobile2").innerHTML="Invalid";
				 document.getElementById("mobile2").style.color="red"; 
				
			}
			else
			{
				 document.getElementById("mobile2").innerHTML="";
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
                    <!--=============== parallax section  ===============-->	
                    <section class="parallax-section header-section">
                        <div class="bg bg-parallax" style="background-image:url(images/bg/33.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                        <div class="overlay"></div>
                        <div class="container">
                           <h2>Personal info</h2>
                            
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
                                        <h4>Personal info</h4>
                                        <div class="separator color-separator"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inner">
                                                <p> Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword
                                                <?php echo "select * from tb_address where Email='$_SESSION[user]'";?>
                                                                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bold-separator">
                                        <span></span>
                                    </div>
                                    <div class="reservation-form-holder">
                                        <div class="reservation-form">
                                            <div id="message"></div>
                                            <form method="post" action="insert_register.php" name="frm" class="add">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>personal details</h3>
                                                          <input name="name" type="text" id="name"  value="<?php echo $fet_add['Name'];?>" placeholder="Name">
                                                          <input name="lname" type="text" id="name"  value="<?php echo $fet_add['Lname'];?>" placeholder="Lname" >
                                                        <!--mail--> 
                                                        <input name="email" type="text" id="email"  value="<?php echo $_SESSION['user'];?>"  readonly>
                                                        <!--phone--> 
                                                        <input name="phone1" type="text"   value="<?php echo $fet_add['Phn'];?>" placeholder="Phn" maxlength="10" onKeyUp="mobile1();"> 
                                                         <div id="mobile" class="zz"></div>
                                                        <!--date-->
                                                    
                                                        <!--restaurant-->                                      
                                                       <!-- <select class="form-control" id="resrest" onClick="this.select()">
                                                            <option value="Lambert - New York City">Lambert  - Chandigarh</option>
                                                            <option value="Lambert - Washington">Lambert - Mohali</option>
                                                            <option value="Lambert - Florida ">Lambert - Ludhiana</option>
                                                        </select>
                                                        <!--person-->    
                                                       <!-- <select id="numperson" class="form-control" onClick="this.select()" >
                                                            <option value="1">1 Person</option>
                                                            <option value="2">2 People</option>
                                                            <option value="3">3 People</option>
                                                            <option value="4">4 People</option>
                                                            <option value="5">5 People</option>
                                                            <option value="6">6 People</option>
                                                        </select>-->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3>Address Details</h3>
                                                        <select class="form-control" id="resrest"  name="country" onchange="cats(this.value,'ajx_state','display_state')">
                                                        <option disabled="disabled" selected="selected">Choose country</option>
                                                            <?php
							                                  $x=mysql_query("select * from tb_country");
                                                             while($x1=mysql_fetch_array($x))
							                                   {
								                                echo "<option value='$x1[s_no]'";
								                                if($fet_add['Country']==$x1['s_no'])
								                               echo "selected='selected'";
								                               echo ">$x1[Country]</option>";
							                                    }
							                              ?>
                                                        </select>
                                                      <div id="display_state">
                                                        <select id="numperson" class="form-control"  name="state">
                                                          <option disabled="disabled" selected="selected">Choose State</option>
                                                         
                                                             <?php
							                                    $x2=mysql_query("select * from tb_state");
                                                               while($x1=mysql_fetch_array($x2))
							                                     {
								                                   echo "<option value='$x1[s_no]'";
								                                  if($fet_add['State']==$x1['s_no'])
								                                 echo "selected='selected'";
								                                 echo ">$x1[state]</option>";
							                                    }
							                                   ?>
                                                        </select>
                                                        </div>
                                                       <div id="display_city">
                                                        <select id="numperson" class="form-control" name="city">
                                                          <option disabled="disabled" selected="selected">Choose City</option>
                                                               <?php
							                                    $x=mysql_query("select * from tb_city");
                                                               while($x1=mysql_fetch_array($x))
							                                     {
								                                   echo "<option value='$x1[s_no]'";
								                                  if($fet_add['City']==$x1['s_no'])
								                                 echo "selected='selected'";
								                                 echo ">$x1[city]</option>";
							                                    }
							                                   ?>
                                                               
                                                        </select>
                                                        </div>
                                                         <input name="landmark" type="text" id="name"  onClick="this.select()" value="<?php echo $fet_add['Landmark'];?>"  placeholder="Landmark">
                                                           <input name="pin" type="text"  value="<?php echo $fet_add['Pin'];?>" placeholder="pincode" onKeyUp="pin1();"> 
                                                            <div id="mobile2" class="zz"></div>
                                                            <textarea name="Address"  class="comments"> <?php echo $fet_add['Address'];?></textarea>
                                                            <input type="hidden" name="h1" value="address">
                                                    </div>
                                                </div>
                                                <input type="submit" value="submit" class="bb">         										           											
                                            </form>
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