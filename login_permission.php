<?php
ob_start();
session_start();
if(isset($_POST['btt'])&&!empty($_POST['hiddn']))
{
	$seat=$_POST['hiddn'];
	$seat_loc=$_POST['hiddn2'];
	$amount=$_POST['hiddn3'];
	$_SESSION['seat']=$seat;
	$_SESSION['seat_loc']=$seat_loc;
	$_SESSION['amount']=$amount;
}
else
	{
		$fn=$_SESSION['filename'];
		header("location:$fn");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen"><!-- chocolate css for gallery light box-->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Coda:400,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<style>
	.white{
    color:#000;
    background-color:#fff;
}

.btn-facebook {
    color: #ffffff;
    -webkit-text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #2b4b90;
    *background-color: #133783;
    background-image: -moz-linear-gradient(top, #3b5998, #133783);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#3b5998), to(#133783));
    background-image: -webkit-linear-gradient(top, #3b5998, #133783);
    background-image: -o-linear-gradient(top, #3b5998, #133783);
    background-image: linear-gradient(to bottom, #3b5998, #133783);
    background-repeat: repeat-x;
    border-color: #133783 #133783 #091b40;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3b5998', endColorstr='#ff133783', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

    .btn-facebook:hover,
    .btn-facebook:focus,
    .btn-facebook:active,
    .btn-facebook.active,
    .btn-facebook.disabled,
    .btn-facebook[disabled] {
        color: #ffffff;
        background-color: #133783 !important;
        *background-color: #102e6d !important;
    }

    .btn-facebook:active,
    .btn-facebook.active {
        background-color: #0d2456 \9 !important;
    }
</style>
<body> 
<div class="main-agile banner-2">
	<!-- header -->
	<div class="header-w3layouts"> 
		<!-- Navigation -->
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">My-Ebus</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div> 
			<div class="logo-agile-1"> 
				<h1><a class="logo" href="index.html"><i class="fa fa-bus"  aria-hidden="true"></i>My-Ebus</a></h1>
			</div> 
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="active"><a href="test.html">Home</a></li>
				<li><a class="gallery.php" href="#">Gallery</a></li>
				<li class="dropdown menu__item menu__item--current m_nav_item">
					<a href="#" class="dropdown-toggle menu__link link link--kumya" data-toggle="dropdown"><span data-letters="Short Codes">Get Ticket<b class="caret"></b></span></a>
					<ul class="dropdown-menu agile_short_dropdown">
						<li><a href="email_ticket.php">E-Mail Ticket</a></li>
						<li><a href="sms_ticket_first.php">SMS Ticket</a></li>
						<li><a href="print_ticket_first.php">Print Ticket</a></li>
					</ul>
				</li>
				<li><a class="" href="cancel_ticket_first.php">Cancel Ticket</a></li>
				<li><a class="" href="contact.php">Contact Us</a></li>
			</ul>
				<div class="w3ls-social-icons-2">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>
			<!-- //navbar-collapse -->
		</nav>  
	</div>	
	<!-- //header -->
</div> 
<!-- gallery -->
<div class="portfolio">
	<div class="container">
		<div class="w3layouts_header">
			<p><span><i class="fa fa-bus sub-w3l" style="color: #0066ff;" aria-hidden="true"></i></span></p>
		</div>
		<div class="container-fluid">
			<div class="row">
				
		    	<div class="col-md-6 col-md-offset-3">
		    		<div style="border-bottom: groove; margin-bottom: 25px;">
		    			<center><a href="booking_details.php"><button class="btn btn-primary btn-block" style="margin-bottom: 25px;">Continue as Guest</button></a></center>
		    		</div>
		    		<div class="panel panel-default">
					  	<div class="panel-heading">
					    	<h3 class="panel-title">Login</h3>
					 	</div>
					  	<div class="panel-body">
					    	<form accept-charset="UTF-8" role="form">
		                    <fieldset>
					    	  	<div class="form-group">
					    		    <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
					    		</div>
					    		<div class="form-group">
					    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
					    		</div>
					    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
					    	</fieldset>
					      	</form><hr/>
		                    <center><h3>OR</h3></center><hr/>
		                    <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //gallery -->
<!-- footer -->
<footer>
	<div class="agileinfo-footer">
		<div class="container">
			<div class="agileits-footer-top">
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-map-marker"></i>
					<div class="w3-address1">
						<p>Lorem ipsum dolor,
						TL 19034-88974</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-phone"></i>
					<div class="w3-address1">
						<p>+012 345 6789</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-envelope"></i>
					<div class="w3-address1">
						<p><a href="mailto:info@example.com"> mail@example.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- Counter -->
			<div class="services-bottom">
				<div class="counter-agile">
					<div class="counter-subw3l">
						<p><a href="index.html"><i class="fa fa-plane" aria-hidden="true"></i>My-Ebus</a></p>
					</div>
					<div class="ftr-menu">
						 <ul>
							<li><a href="index.html">Home </a></li>
							<li><a class="" href="services.html">Services</a></li>
							<li><a class="active" href="gallery.html">Gallery</a></li>
							<li><a class="" href="icons.html">Web Icons</a></li>
							<li><a class="" href="typography.html">Typography</a></li>
							<li><a class="" href="contact.html">Contact Us</a></li>
						 </ul>
					</div>
					<div class="counter-subw3l w3l-right-footer">
						<ul class="w3layouts-agileits-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //Counter -->
		</div>
		<div class="agileits-footer-bottom">
			<p class="footer-class">&copy; 2017 My-Ebus. All Rights Reserved</p>
		</div>
	</div>
</footer>
<!-- //footer -->
<!-- js-scripts -->			
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- fliter-JavaScript -->
		<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //fliter-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->	
<!-- //js-scripts -->
</body>
</html>