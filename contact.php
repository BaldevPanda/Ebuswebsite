<!DOCTYPE html>
<html lang="en">
<head>
<title>My-Ebus | Contact</title>
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
	</div>	
	<!-- //header -->
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
            <label class="radio-inline">
              <input type="radio" value="student" name="log-type" autocomplete="off" required>Student
            </label>
            <label class="radio-inline">
              <input type="radio" name="log-type" value="teacher" required autocomplete="off"> Teacher
            </label>
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
<!-- contact -->
<section class="contact-w3ls">
	<div class="container">
		<h3 class="agile-title">Contact Us</h3>
		<div class="w3layouts_header">
			<p><span><i class="fa fa-bus sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Get In Touch</h4>
				<form action="#" method="post">
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Full Name:</label> 
                            <input type="text" class="form-control" name="name" id="name" Placeholder=" " required="">
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" Placeholder=" " required="">
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" Placeholder=" " required="">
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Message:</label>
                            <textarea class="form-control" name="message" rows="7"> </textarea>
                            <p class="help-block"></p>
						</div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send</button>	
				</form>            
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4 class="w3l-contact">Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong> +91 7873-563-234</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:myebus.in@gmail.com">myebus.in@gmail.com</a></p>
			<p class="contact-agile1"><strong>Address :</strong> Near Tata Motors, Baramunda , India.</p>											
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
					<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
					<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- map -->
<div class="w3l-map">
	<iframe src="https://www.google.com/maps/embed/v1/place?q=baramunda,+bhubaneswar&key=AIzaSyAgL-SKEuHjUQ8ViQDPfAS53qO3XPhihwk" ></iframe>
</div>
<!-- //map -->
<!-- //contact -->
<!-- footer -->
<footer>
	<div class="agileinfo-footer">
		<div class="container">
			<div class="agileits-footer-top">
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-map-marker"></i>
					<div class="w3-address1">
						<p>Near Tata Motors,
						Baramunda, Bhubaneswar</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-phone"></i>
					<div class="w3-address1">
						<p>+91 7873-563-234</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-envelope"></i>
					<div class="w3-address1">
						<p><a href="mailto:myebus.in@gmail.com"> myebus.in@gmail.com</a></p>
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
							<li><a href="index.php">Home </a></li>
							<li><a class="" href="gallery.php">Gallery</a></li>
							<li><a class="active" href="contact.php">Contact Us</a></li>
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
<!-- //js-scripts -->
</body>
</html>