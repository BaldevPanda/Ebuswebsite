<?php
ob_start();
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>My-Ebus | Booking Details</title>
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
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Coda:400,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<style>
	.semi_container{
		border:ridge;
		padding-top: 2%;
		padding-bottom: 2%;
	}
	.semi_container p{
		text-align: left;
		color: #000;
		font-family: sans-serif;
		font-size: 70%;
	}
	@media screen and (min-width: 350px)
	{
		.semi_container p{
		text-align: left;
		color: #000;
		font-family: sans-serif;
		font-size: 125%;
	}
	}
</style>
</head>
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
				<h1><a class="logo" href="index.html"><i class="fa fa-bus" aria-hidden="true"></i>My-Ebus</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="active"><a href="index.php">Home</a></li>
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
			</div>
			<!-- //navbar-collapse -->
		</nav>  
	</div>	
	<!-- //header -->
</div> 
<!-- services -->
<div class="banner-bottom">
	<div class="container">
		<h3 class="agile-title">Your Booking Details</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-bus sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<?php
	
			if(!empty($_REQUEST['tranid']))
			{
				$tranid=$_REQUEST['tranid'];
				$showsql="SELECT * FROM booking WHERE transactionid='$tranid'";
				$showresult=$conn->query($showsql);
				if($showresult->num_rows>0)
				{
					$show_row=mysqli_fetch_assoc($showresult);
					$rid=$show_row['rid'];
					$busquery="SELECT * from route WHERE rid='$rid'";
					$busresult=$conn->query($busquery);
					if($busresult->num_rows===1)
					{
						$busrow=mysqli_fetch_assoc($busresult);
						
						echo "<div class='semi_container'>";
							echo "<div class='container-fluid' style='margin-left:3%;'>";						
							echo "<div class='row'>";
							echo "<p><bold>Boarding City : </bold>".$busrow['b_start']."</p>";
							echo"</div>";
							echo "<div class='row'>";
							echo "<p><bold>Destination City : </bold>".$busrow['end_to']."</p>";
							echo"</div>";
							echo "<div class='row'>";
							echo "<p><bold>Booking Date : </bold>".$show_row['a_date']."</p>";
							echo"</div>";
							echo "<div class='row'>";
							echo "<p><bold>Seat Number : </bold>";
							$seatsql="SELECT seatno FROM booking WHERE transactionid='$tranid'";
							$seatresult=$conn->query($seatsql);
							if($seatresult->num_rows > 0)
							{
								$seatrow=mysqli_fetch_assoc($seatresult);
								echo $seatrow['seatno'];
								while ($seatrow=mysqli_fetch_assoc($seatresult))
								{
									echo ", ".$seatrow['seatno'];
								}
							}
							echo "</p>";
							echo"</div>";
							echo "<div class='row'>";
							echo "<p><bold>Total Amount : </bold>".$show_row['amount']."</p>";
							echo"</div>";
							echo "<div class='row'>";
							echo "<p><bold>First Name : </bold>".$show_row['first_name']."</p>";
							echo"</div>";
							echo "<div class='row'>";
							echo "<p><bold>Last Name : </bold>".$show_row['last_name']."</p>";
							echo"</div>";
							echo "<div class='row'>";
							echo "<p><bold>Phone Number : </bold>".$show_row['contact']."</p>";
							echo"</div>";
							echo "<div class='row'>";
							echo "<p><bold>Email ID : </bold>".$show_row['email_id']."</p>";
							echo"</div>";
						echo "</div>";
						echo "</div>";
					}
				}
			}
		?>
		<form action="payment_page.php" method="POST">
			<input type="hidden" name="fname" value="<?php echo $show_row['first_name']; ?>">
			<input type="hidden" name="lname" value="<?php echo $show_row['last_name']; ?>">
			<input type="hidden" name="contact" value="<?php echo $show_row['contact']; ?>">
			<input type="hidden" name="email" value="<?php echo $show_row['email_id']; ?>">
			<input type="hidden" name="tranid" value="<?php echo $tranid; ?>">
			<input type="hidden" name="amount" value="<?php echo $show_row['amount']; ?>">
			<input type="hidden" name="service_provider" value="<?php echo "My-Ebus" ?>">
			<input type="hidden" name="product_info" value="<?php echo $_SESSION['seat']; ?>">
			<input type="hidden" name="success_url" value="success.php">
			<input type="hidden" name="failure_url" value="failure.php">
			<input type="submit" name="submit" value="submit" class="btn btn-default">
		</form>
	</div>
</div>
<!-- //services --> 
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
						<p><a href="index.html"><i class="fa fa-bus" aria-hidden="true"></i>My-Ebus</a></p>
					</div>
					<div class="ftr-menu">
						 <ul>
							<li><a href="index.html">Home </a></li>
							<li><a class="active" href="services.html">Services</a></li>
							<li><a class="" href="gallery.html">Gallery</a></li>
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
	<!-- Numscroller -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- carousal-plugin -->
	<script src="js/jquery.film_roll.js"></script> 
	<script src="js/index.js"></script>
	<!-- //carousal-plugin -->
<!-- //js-scripts -->
</body>
</html>