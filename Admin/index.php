<?php
include_once("database.php");
session_start();
ob_start();
if(!($_SESSION['user']))
   {
	   $_SESSION['no']="plz login";
      header("location:login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Restaurant Mnagement</title>
	<meta name="description" content="Perfectum Dashboard Bootstrap Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	
	<!--[if lt IE 7 ]>
	<link id="ie-style" href="css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8 ]>
	<link id="ie-style" href="css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 9 ]>
	<![endif]-->
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	<script src="cat.js"></script>
		
		
		
</head>

<body>
		<div id="overlay">
		<ul>
		  <li class="li1"></li>
		  <li class="li2"></li>
		  <li class="li3"></li>
		  <li class="li4"></li>
		  <li class="li5"></li>
		  <li class="li6"></li>
		</ul>
	</div>	
	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
            
             
				
				<a class="brand" href="index.php"> <img alt="Restaurent Mnagement" src="img/logo20.png" /> <span class="hidden-phone">Restaurent Mnagement</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						<!-- start: Notifications Dropdown -->
						
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						
						<!-- end: Message Dropdown -->
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-user icon-white"></i>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								
								<li><a href="session_destroy.php"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
                  
				<!-- end: Header Menu -->
				
			</div>
             
		</div>
       
	</div>
	
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div class="span2 main-menu-span">
				<div class="nav-collapse sidebar-nav">
                 
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="index.php?k1=cat"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Type</span></a></li>
						<li><a href="index.php?k1=sub"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Add Item</span></a></li>
						<li><a href="index.php?k1=quanty"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Quantity</span></a></li>
                        <li><a href="index.php?k1=emp"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Employee</span></a></li>
						
						<li><a href="index.php?k1=price"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Price</span></a></li>
						<li><a href="index.php?k1=gallery"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Gallery</span></a></li>
					      <li>
							<a class="dropmenu" href="#"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Address</span></a>
							<ul>
								<li><a class="submenu" href="index.php?k1=country"><i class="fa-icon-file-alt"></i><span class="hidden-tablet">Country</span></a></li>
								<li><a class="submenu" href="index.php?k1=state"><i class="fa-icon-file-alt"></i><span class="hidden-tablet">State</span></a></li>
								<li><a class="submenu" href="index.php?k1=city"><i class="fa-icon-file-alt"></i><span class="hidden-tablet">City</span></a></li>
							</ul>	
						</li>
                        <li><a href="index.php?k1=bill"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Bill info</span></a></li>
                        <li>
							<a class="dropmenu" href="#"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Table Booking</span></a>
							<ul>
								<li><a class="submenu" href="index.php?k1=tabletype"><i class="fa-icon-file-alt"></i><span class="hidden-tablet">Table type</span></a></li>
								<li><a class="submenu" href="index.php?k1=tableno"><i class="fa-icon-file-alt"></i><span class="hidden-tablet">Table info</span></a></li>
                                <li><a class="submenu" href="index.php?k1=booking"><i class="fa-icon-file-alt"></i><span class="hidden-tablet">Table Booking</span></a></li>
								
							</ul>	
						</li>
                       <li><a class="submenu" href="index.php?k1=letter"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Newsletter</span></a></li>
                        <li><a href="index.php?k1=rev"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Reviews</span></a></li>
                        <li><a href="index.php?k1=writeus"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Write us</span></a></li>
                         <li><a href="index.php?k1=res"><i class="icon-edit icon-white"></i><span class="hidden-tablet">Reservation</span></a></li>
                    </ul>
                   
				</div><!--/.well -->
			</div><!--/span-->
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- start: Content -->
			
			<!--<div>       
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
				<hr>
             
			</div>-->
            
              <?php
			      $k=$_REQUEST['k1'];
				  if($k=="cat")
				  {
				     include_once("category.php");
					 include_once("cattable.php");
				  }
				  elseif($k=="sub")
				  {
					   include_once("subcategory.php");
					 include_once("subtable.php");
				  }
				   elseif($k=="quanty")
				  {
					   include_once("quantity.php");
					 include_once("quantable.php");
				  }
				   elseif($k=="emp")
				  {
					   include_once("demo.php");
					 include_once("empmastertable.php");
				  }
				   elseif($k=="price")
				  {
					   include_once("price.php");
					 include_once("pricetable.php");
				  }
				  elseif($k=="gallery")
				  {
					   include_once("gallery.php");
					 include_once("gallerytable.php");
				  }
				   elseif($k=="country")
				  {
					   include_once("country.php");
					 include_once("cntrytable.php");
				  }
				   elseif($k=="state")
				  {
					   include_once("state.php");
					 include_once("statetable.php");
				  }
				   elseif($k=="city")
				  {
					   include_once("city.php");
					 include_once("citytable.php");
				  }
				   elseif($k=="bill")
				  {
					   include_once("billinfo.php");
					   //include_once("billinfotable.php");
					   
				  }
				  elseif($k=="bill2")
				  {
					   include_once("billinfotable.php");
					   //include_once("billinfotable.php");
					   
				  }
				  elseif($k=="delvry")
				  {
					   include_once("delievery.php");
					   //include_once("billinfotable.php");
					   
				  }
				   elseif($k=="tabletype")
				  {
					   include_once("tableform.php");
					   include_once("tableform2.php");
					   
				  }
				    elseif($k=="tableno")
				  {
					   include_once("tableno.php");
					   include_once("tableno1.php");
					   
				  }
				  elseif($k=="booking")
				  {
					   include_once("Booking.php");
					    include_once("Bookingtable.php");
					  
					   
				  }
				  elseif($k=="letter")
				  {
					   include_once("news.php");
					  // include_once("newstable.php");
					   
					  
					   
				  }
				   elseif($k=="rev")
				  {
					   include_once("reviews.php");
					  // include_once("newstable.php");
					   
					  
					   
				  }
				  elseif($k=="writeus")
				  {
					   include_once("contact.php");
					  // include_once("newstable.php");
					   
					  
					   
				  }
				   elseif($k=="res")
				  {
					   include_once("reservation.php");
					  // include_once("newstable.php");
					   
					  
					   
				  }
				  
				  else
				  {?>
					<script src="js/jquery-1.9.1.min.js"></script>
					<script src="js/jquery-migrate-1.0.0.min.js"></script>
				  <?php }?>
				  
			  
            
            
     </div>       
			
			
</div>
</div>		
		
	
			
			
			
			
				
			
			
				
			
				
		
		
		
<script src="js/jquery.cleditor.min.js"></script>

	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>

		<script src="js/custom.js"></script>
		<script type="text/javascript">
	
	$(document).ready(function(){
		
		setTimeout("message_welcome1()",5000);
		setTimeout("message_welcome2()",10000);	
		setTimeout("message_welcome3()",15000);
		
	});			
	</script>
		<!-- end: JavaScript-->
	
</body>
</html>
