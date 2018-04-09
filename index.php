<?php
ob_start();
session_start();
include "connect.php";
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
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Coda:400,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<style>
	.xtra{
		border: none;
		background: none;
		color: #fff;
	}
</style>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="typeahead.js"></script>
	<style>
	.typeahead { border: 2px solid #FFF;border-radius: 4px;padding: 8px 12px;max-width: 300px;min-width: 290px;background: rgba(66, 52, 52, 0.5);color: #FFF;}
	.tt-menu { width:300px; }
	ul.typeahead{margin:0px;padding:10px 0px;}
	ul.typeahead.dropdown-menu li a {padding: 10px !important;	border-bottom:#CCC 1px solid;color:#FFF;}
	ul.typeahead.dropdown-menu li:last-child a { border-bottom:0px !important; }
	.bgcolor {max-width: 550px;min-width: 290px;max-height:340px;background:url("world-contries.jpg") no-repeat center center;padding: 100px 10px 130px;border-radius:4px;text-align:center;margin:10px;}
	.demo-label {font-size:1.5em;color: #686868;font-weight: 500;color:#FFF;}
	.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
		text-decoration: none;
		background-color: #1f3f41;
		outline: 0;
	}
	</style>	
</head>
<body> 
<div class="main-agile">
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 
		<!-- banner-text -->
		<div class="w3layouts-banner-top">
			<div class="container">
				<div class="agileits-banner-info">
					<div class="rw-wrapper">
				<div class="rw-sentence">
					<div class="rw-words rw-words-1">
						<span>Welcome To My-Ebus</span>
						<span>Welcome To My-Ebus</span>
						<span>Welcome To My-Ebus</span>
						<span>Welcome To My-Ebus</span>
						<span>Welcome To My-Ebus</span>
						<span>Welcome To My-Ebus</span>
					</div>
					<div class="rw-words rw-words-2">
						<span>Travel to live, Live to travel</span>
						<span>Travel to live, Live to travel</span>
						<span>Travel to live, Live to travel</span>
						<span>Travel to live, Live to travel</span>
						<span>Travel to live, Live to travel</span>
						<span>Travel to live, Live to travel</span>
					</div>
				</div>
			</div>
				</div>	
				<div class="sap_tabs" >	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item grid2"><span><i class="fa fa-bus" aria-hidden="true"></i>Buses</span></li>
						</ul>				  	 
						<div class="resp-tabs-container" >
						<div class="tab-1 resp-tab-content">
						<div class="facts">
						<form action="showbus.php" method="post" >
							<div class="flights">
								<div class="reservation">
								<ul>		
									<li class="span1_of_1 desti1">
									<div class="book_date">
									<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
										<input type="text" placeholder="From" class="typeahead1 input-md form-control tt-input" id="txtCountry" name="from" required="">
									</div>					
									</li>
									<li  class="span1_of_1 desti1">
									<div class="book_date"> 
									<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
										<input type="text" placeholder="To" class="typeahead1 input-md form-control tt-input" name="to" required="">
									</div>					
									</li>
								</ul>
							</div>
								<div class="reservation">
									<ul>	
										<li">
											<div class="book_date">
											<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
											<input  id="datepicker" name="ddate" type="text" placeholder="Date of Journey (mm/dd/yyyy)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/mm/dd';}" required="">
														
														 </div>		
													 </li>
													 
												</ul>
											</div>
											<div class="reservation w3l-submit">
												<ul>	
													 <li class="span1_of_3">
														<div class="date_btn">
														<input type="submit" value="Search Buses" name="submit" />
															</div>
													 </li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>
<!-- //banner-text -->
<!-- //banner --> 
<!-- header -->
<div class="header-w3layouts"> 
	<!-- Navigation -->
	<nav class="navbar navbar-default">
		<div class="navbar-header" style="float: left;">
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
			<!--LOGIN AND SIGNUP AREA STARTS-->
			<div class="collapse navbar-collapse navbar-ex1-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		        <li><a href="#" data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
		      </ul>
		    </div>
		   	<!--LOGIN AND SIGNUP AREA ENDS-->
		</div>
		<!-- //navbar-collapse -->
	</nav>  
	<div class="clearfix"> </div>
</div>	
<!-- LOGIN MODAL START HERE -->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="login.php" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="usrname" placeholder="Enter ID" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="psw" placeholder="Enter password" required autocomplete="off">
            </div>
              <br><input type="submit" value="Login" name="submit" style="margin-top: 10px;" class="btn btn-success btn-block">
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Sign Up</a></p>
          <p>Forgot <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#forgot">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
  <!--LOGIN MODAL ENDS HERE-->
  <!--SIGNUP MODAL ENDS HERE-->
  <div class="modal fade" id="signupModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="login.php" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="usrname" placeholder="Enter ID" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="psw" placeholder="Enter password" required autocomplete="off">
            </div>
              <br><input type="submit" value="Login" name="submit" style="margin-top: 10px;" class="btn btn-success btn-block">
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Already a member? <a href="index.php" data-toggle="modal" data-dismiss="modal" data-target="loginModal">Login</a></p>
          <p>Forgot <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#forgot">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
  <!--SIGNUP MODAL ENDS HERE-->
  <!--FORGOT PASSWORD MODAL START HERE-->

<!-- //header -->
<!-- welcome -->
<div class="about w3layouts-agileinfo" id="#aboutus">
	<div class="container">
		<div class="about-top w3ls-agile">
			<div class="col-md-6 red-w3l">
				<img class="img-responsive" src="images/well.jpg" alt="">
				<div class="position-w3l"></div>
			</div>
			<div class="col-md-6 come">
				<div class="about-wel">
					<h5>Welcome To My-Ebus</h5>
					<p style="font-size: 130%;">My-Ebus is the leading inter-citybus ticketing service in Odisha. Founded with aim to provide a safe and convinient journey to the commuters.</p>
					<p style="font-size: 130%;">My-Ebus ensures that the thousands of passengers availing its services enjoy a hassle-free booking experience and a smooth ride to their destinations. Come be a part of the My-Ebus community.</p>
				</div>
				<!--<div class="steps-wel">
					<h5>Follow Us For Easy Steps</h5>
					<div class="col-md-3 col-sm-3 col-xs-3 w3ls_banner_bottom_grids first-posi-w3l">
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-phone hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-users hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-map-marker hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2 w3ls_banner_bottom_grids">
						<h6>01</h6>
						<h6>02</h6>
						<h6>03</h6>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-7 w3ls_banner_bottom_grids">
						<p>Masagni dolores eoquie int Basmodi Basmodi temurer.</p>
						<p>Masagni dolores eoquie int Basmodi Basmodi temurer.</p>
						<p>Masagni dolores eoquie int Basmodi Basmodi temurer.</p>
					</div>
					<div class="clearfix"> </div>
				</div>-->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- stats -->
<div class="stats">
	<div class="container">
		<div class="stats-info">
			<?php
				//for customer
				$sql="SELECT count(distinct transactionid) as ctran from booking WHERE transactionresult='success'";
				$result=$conn->query($sql);
				$row=mysqli_fetch_assoc($result);
				//for route
				$sql_route="SELECT count(rid) as crid from route";
				$result_route=$conn->query($sql_route);
				$row_route=mysqli_fetch_assoc($result_route);
			?>
			<div class="col-md-6 col-sm-6 stats-grid slideanim">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php  echo $row['ctran']; ?>' data-delay='.5' data-increment="1"><?php  echo $row['ctran']; ?></div>
				<h4 class="stats-info">TICKETS BOOKED</h4>
			</div>
			
			<div class="col-md-6 col-sm-6 stats-grid slideanim">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $row_route['crid']; ?>' data-delay='.5' data-increment="1"><?php echo $row_route['crid']; ?></div>
				<h4 class="stats-info">TOURS</h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //stats -->
<!-- footer -->
<footer>
	<div class="agileinfo-footer">
		<div class="container">
			<div class="agileits-footer-top">
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-map-marker"></i>
					<div class="w3-address1">
						<p>OFFICE ADDRESS</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-phone"></i>
					<div class="w3-address1">
						<p>+91-000-000-0000</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-envelope"></i>
					<div class="w3-address1">
						<p><a href="mailto:info@example.com"> myebus_services@gmail.com</a></p>
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
							<li><a class="active" href="index.php">Home </a></li>
							<li><a class="" href="gallery.php">Gallery</a></li>
							<li><a class="" href="contact.php">Contact Us</a></li>
							<li><a class="" href="term_condition.php">Terms and Condition</a></li>
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
			<p class="footer-class">&copy; 2017 My-Ebus. All Rights Reserved </p>
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
	<!-- Easy Responsivetabs -->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //Easy Responsivetabs -->
	<!-- strat-date-piker -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	  <script>
	  			var d=new Date();
			  $(function() {
				$( "#datepicker,#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd', maxDate: '+1m', minDate: 'd+1' });

			  });
	  </script>
	<!-- //End-date-piker -->
	<!-- Numscroller -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->
<!-- //js-scripts -->
<script>
   $(document).ready(function () {
	  $('#txtCountry').typeahead({
		 source: function (query, result) {
			$.ajax({
				 url: "server.php",
				data: 'query=' + query,            
				 dataType: "json",
				 type: "POST",
				 success: function (data) {
				result($.map(data, function (item) {
				return item;
			 }));
		}
	});
   }
});
});
</script>
</body>
</html>