<?php
ob_start();
session_start();
include "connect.php";
$aid="";
$_SESSION['no_backward']="";
if(empty($_SESSION['user_id']))
{
	if(!empty($_SESSION['seat'])&&!empty($_SESSION['seat_loc'])&&!empty($_SESSION['amount']))
	{

		$_SESSION['no_backward']="no";
		$bid=$_SESSION['busid'];
		$bookdate=$_SESSION['date'];
		$rid=$_SESSION['route_id'];
		$t=time();
		$uid="u".(string)$t.(string)rand(10,99);
		$transaction="t".(string)date('dmy').(string)$t.rand(10,99);
		$_SESSION['trans_id']=$transaction;
		$dt=date("yyyy-mm-dd");
		$sql="SELECT aid FROM bus_info WHERE bid='$bid'";
		$result=$conn->query($sql);
		$tran_time=date("h:i:s",time());
		if($result->num_rows===1)
		{
			$row=mysqli_fetch_assoc($result);
			$aid=$row['aid'];
		}

		$seat=$_SESSION['seat'];
		$seat_loc=$_SESSION['seat_loc'];
		$amount=$_SESSION['amount'];
		$seat_id=explode(" ", $seat);
		$seat_loc_arr=explode(" ",$seat_loc);
		$length=sizeof($seat_id);
		for($i=0;$i<$length-1;$i++)
		{
			$seat_loc_query="INSERT INTO booking(aid,a_date,bid,rid,seatno,seatlocation,uid,transactionid,transactionresult,transaction_date,transactiontime,transactiontime_sec,amount) VALUES ('$aid','$bookdate','$bid','$rid','$seat_id[$i]','$seat_loc_arr[$i]','$uid','$transaction','hold','$dt','$tran_time','$t','$amount')";
			if(!($conn->query($seat_loc_query)))
			{
				 echo "Error: " . $seat_loc_query . "<br>" . $conn->error;
				
			}
			else
			{
				$seatdec="UPDATE seat_avaibility set seatsleft=seatsleft-1 WHERE bid='$bid' AND a_date='$bookdate'";
				if(!$conn->query($seatdec))
				{
					echo "Error: " . $seatdec . "<br>" . $conn->error;
				}
			}
		}
	}
	
}
else
{
	$user_id=$_SESSION['user_id'];
	$bid=$_SESSION['busid'];
		$bookdate=$_SESSION['date'];
		$rid=$_SESSION['route_id'];
		$t=time();
		$uid="u".(string)$t.(string)rand(10,99);
		$transaction="t".(string)date('dmy').(string)$t.rand(10,99);
		$dt=date("d/m/y");
		$sql="SELECT aid FROM bus_info WHERE bid='$bid'";
		$result=$conn->query($sql);
		$tran_time=date("h:i:s",time());
		if($result->num_rows===1)
		{
			$row=mysqli_fetch_assoc($result);
			$aid=$row['aid'];
		}

		$seat=$_SESSION['seat'];
		$seat_loc=$_SESSION['seat_loc'];
		$amount=$_SESSION['amount'];
		$seat_id=explode(" ", $seat);
		$seat_loc_arr=explode(" ",$seat_loc);
		$length=sizeof($seat_id);
		for($i=0;$i<$length-1;$i++)
		{
			$seat_loc_query="INSERT INTO booking(aid,a_date,bid,rid,seatno,seatlocation,uid,transactionid,transactionresult,transaction_date,transactiontime,transactiontime_sec,amount) VALUES ('$aid','$bookdate','$bid','$rid','$seat_id[$i]','$seat_loc_arr[$i]','$uid','$transaction','hold','$dt','$tran_time','$t','$amount')";
			if(!($conn->query($seat_loc_query)))
			{
				 echo "Error: " . $seat_loc_query . "<br>" . $conn->error;
				
			}
			else
			{
				$seatdec="UPDATE seat_avaibility set seatsleft=seatsleft-1 WHERE bid='$bid' AND a_date='$bookdate'";
				if(!$conn->query($seatdec))
				{
					echo "Error: " . $seatdec . "<br>" . $conn->error;
				}
			}
		}
}
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
		<h3 class="agile-title">Enter Booking Details</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-bus sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
			<form role="form" action="passenger_entry.php" enctype="multipart/form-data" method="post">
	            <div class="form-group">
	              <div class="row">
	              <div class="col-sm-4">
	              	<input type="text" class="form-control" name="fname" placeholder="Enter First Name" required autocomplete="off">
	              </div>
	              <div class="col-sm-4">
	              	<input type="text" class="form-control" name="mname" placeholder="Enter Middle Name" autocomplete="off">
	              </div>
	              <div class="col-sm-4">
	              	<input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required autocomplete="off">
	              </div>
	          	</div>
	            </div>
	            <div class="form-group">
	            <div class="row">
	            	<div>
	            		<label class="radio-inline" style="font-size:130%;">
	             		 <input type="radio" value="male" name="sex" autocomplete="off" required>Male
	            		</label>
	            		<label class="radio-inline"  style="font-size:130%;">
	             		 <input type="radio" value="female" name="sex" autocomplete="off" required>Female
	            		</label>
	            	</div>
	            </div>
	        </div>
	            <div class="form-group">
	            	<div class="row">
		            	<div class="col-sm-6">
		            		<input type="number" class="form-control" name="phno" placeholder="Phone no" required autocomplete="off">
		            	</div>
		            	<div class="col-sm-6">
		            		<input type="number" class="form-control" name="age" placeholder="Age" required autocomplete="off">
		            	</div>
		            </div>
	            </div>
	            <div class="form-group">
	            	<div class="row">
	            		<div class="col-sm-12">
		            		<input type="email" class="form-control" name="email" placeholder="Email" required autocomplete="off">
		            	</div>
		            </div>
	            </div>
	              <br><input type="submit" value="Continue" name="submit" style="margin-top: 10px;" class="btn btn-success btn-block">
	          </form>
			</div>
		</div>

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
						<p><a href="index.html"><i class="fa fa-plane" aria-hidden="true"></i>Tourism</a></p>
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