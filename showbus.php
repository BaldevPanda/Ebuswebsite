<?php
	ob_start();
	session_start();
	include "connect.php";
	if(!empty($_POST['from'])&&!empty($_POST['to'])&&!empty($_POST['ddate']))
		{
			$_SESSION['from']=$_POST['from'];
			$_SESSION['to']=$_POST['to'];
			$_SESSION['date']=$_POST['ddate'];
		}
	else
	{
		if(empty($_SESSION['from'])&&empty($_SESSION['to'])&&empty($_SESSION['date']))
		{
			header("location:index.php");		
		}
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>My-Ebus | SHOW BUS</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Coda:400,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<style>
	.box{
		border-bottom: ridge;
		border-radius: 15px;
		border-color: #0066ff;

	}
	.time{
		font-size: 150%;
		font-weight:140%;
		text-shadow: 5px;
	}
	.busicon{
		color: #000; 
		font-size: 250%;
	}
	.busname{
		font-family: sans-serif;color: #000; font-weight: 140%; float: left;font-size: 140%;
	}
	@media screen and (max-width: 767px) {
		.box{
			width: 100%;
		}
      .time{
		font-size: 100%;
		font-weight:140%;
		text-shadow: 5px;
		text-align: center;
		}
		.busicon{
			color: #000; 
			font-size: 250%;
		}
		.busname{
			font-family: sans-serif;
			color: #000;
			font-weight: 140%;
			float: left;
			font-size: 100%;
		}
    }
    @media screen and(max-width: 486px){
      .box{
			width: 100%;
		}
      .time{
		font-size: 100%;
		font-weight:140%;
		text-shadow: 5px;
		text-align: center;
		}
		.busicon{
			color: #000; 
			font-size: 250%;
		}
		.busname{
			font-family: sans-serif;
			color: #000;
			font-weight: 140%;
			float: left;
			font-size: 100%;
		}
      }
    }
    .link-text{
    	text-decoration: none;
    	color: #000;
    }
    .info_box{
    	margin-bottom: 2%;
    }
    .space{
    	margin-right: 10px;
    	text-align: center;
    }
    .text{
    	font-size: 125%;
    	color: #000;
    	font-family: sans-serif;

    }
    .effects button{
    	text-decoration: none;
    	background-color:#0066ff;
    	color: #fff; 
    }
    .effects button:hover{
    	color: #0066ff;
    	background-color: #fff;
    	box-shadow: 10px;
    }
</style>
</head>
<body> 
<div class="main-agile banner-2">
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
  <!-- PHP to store the modified details in the session start-->
<?php
	if(isset($_REQUEST['modify']))
	{
		$_SESSION['from']=$_REQUEST['m_from'];
		$_SESSION['to']=$_REQUEST['m_to'];
		$_SESSION['date']=$_REQUEST['m_date'];
			
	}
?>
  <!-- PHP to store the modified details in the session stop-->
  
  <!--SIGNUP MODAL ENDS HERE-->
  <!-- Modify MODAL START HERE -->
<div class="modal fade" id="modifyModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon"></span> Modify Details</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <label for="from"><span class="glyphicon glyphicon-user"></span> FROM</label>
              <select class="form-control" name="m_from">
				<option value="<?php echo $_SESSION['from']; ?>" selected><?php echo $_SESSION['from']; ?></option>
					<?php
						$sql="SELECT distinct b_start FROM route ORDER BY b_start ASC";
						$result=$conn->query($sql);
						if($result->num_rows>0)
						{
							while($row=mysqli_fetch_assoc($result))
							{
								echo "<option value='".$row['b_start']."'>";
								echo $row['b_start'];
								echo "</option>";
							}
						}
						else
						{
							echo "<option class='disabled'>No City found</option>";
						}
					?>
				</select>
            </div>
            <div class="form-group">
              <label for="to"><span class="glyphicon glyphicon-eye-open"></span> To</label>
              <select class="form-control" name="m_to">
				<option value="<?php echo $_SESSION['to']; ?>" selected><?php echo $_SESSION['to']; ?></option>
				<?php
					$sql="SELECT distinct end_to FROM route ORDER BY end_to ASC";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							echo "<option value='".$row['end_to']."'>";
							echo $row['end_to'];
							echo "</option>";
						}
					}
					else
					{
						echo "<option class='disabled'>No City found</option>";
					}
				?>
			</select>
            </div>
            <div class="form-group">
            	<label for="date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Date</label>
				<input  id="datepicker" name="m_date" type="text" value="<?php echo $_SESSION['date']; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yyyy/mm/dd';}" class="form-control">
            </div>
              <br><input type="submit" value="Modify" name="modify" style="margin-top: 10px;" class="btn btn-success btn-block">
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
  <!--modify MODAL ENDS HERE-->
 <!-- services -->
<div class="banner-bottom">
	<div class="container-fluid">
		<h3 class="agile-title">AVAILABLE BUSES</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-bus sub-w3l" style="color: #0066ff;" aria-hidden="true"></i></span></p>	
		</div>
		<div class="row info_box">
  	<?php
  	if(isset($_REQUEST['submit']))
  	{
  		$from=$_REQUEST['from'];
		$to=$_REQUEST['to'];
		$ddate=$_REQUEST['ddate'];
		$_SESSION['from']=$from;
		$_SESSION['to']=$to;
		$_SESSION['date']=$ddate;
	}
		echo "<div class='col-sm-12'>";
		echo "<div class='col-sm-3'></div>";
		echo "<div class='col-sm-8'>";
			echo "<div class='col-sm-4></div>";
			echo "<div class='col-sm-8'>";
				echo "<div class='col-sm-4 space'>";
			  	echo "<p class='text'><span class='space'>".$_SESSION['from']."</span><span class='glyphicon glyphicon-arrow-right space'></span><span class='space'>".$_SESSION['to']."    </span></p>";
			  	echo "</div>";
			  	echo "<div class='col-sm-2' >";
			  	echo "<p class='text'>";
			  	echo $_SESSION['date'];
			  	echo "</p>";
			  	echo "</div>";
			  	echo "<div class='col-sm-5 effects'>";
			  	echo "<button data-toggle='modal' data-target='#modifyModal' data-dismiss='modal' class='btn btn-default effects'>Modify</button>";
			  	echo "</div>";
			  echo "</div>";
	  	echo "</div>";
	  	echo "</div>";
  	?>
  </div>
		<div class="clearfix" style="border-bottom: ridge; color:#0066ff;margin-bottom: 1.5%; "> </div>
		<div class="container">
		<?php
			if(!empty($_SESSION['from'])&&!empty($_SESSION['to']))
			{
				$from=$_SESSION['from'];
				$to=$_SESSION['to'];
				$ddate=$_SESSION['date'];
				$routesql="SELECT * FROM route WHERE b_start='$from' AND end_to='$to'";
				$routeresult=$conn->query($routesql);
				if($routeresult->num_rows>0)
				{
					while($routerow=mysqli_fetch_assoc($routeresult))
					{
						$bid=$routerow['bid'];
						$_SESSION['route_id']=$routerow['rid'];
						$seatcheck="SELECT seatsleft,sleeperleft FROM seat_avaibility WHERE bid='$bid' AND a_date='$ddate'";
						$seatcheckresult=$conn->query($seatcheck);
						if($seatcheckresult->num_rows>0)
						{
							$seatcheckrow=mysqli_fetch_assoc($seatcheckresult);
							if($seatcheckrow['seatsleft']>0)
							{
								$businformation="SELECT * from bus_info WHERE bid='$bid'";
								$businformationres=$conn->query($businformation);
								if($businformationres->num_rows===1)
								{
									$businformationrow=mysqli_fetch_assoc($businformationres);
								/* Available bus display*/
								echo "<div class='row box'>
									<div>
										<div class='col-sm-4'>
											<div class='col-sm-2'><i class='fa fa-bus sub-w3l' aria-hidden='true'></i>
											</div>
											<div class='col-sm-10'>
												<div class='row'>";
												echo "<p class='busname'>".$businformationrow['busname']."</p><br>";
												echo "</div>";
												echo "<div class='row'>";
												echo "<p class='busname'>".$businformationrow['bus_type']."</p>";
											echo "</div>";

											echo "</div>";
										echo "</div>";
										echo "<div class='col-sm-3'>";
										echo  "<div class='row'>";
										echo  "<div class='col-md-5 time'>".$routerow['arrival']."</div>";
										echo  "<div class='col-md-2'><li class='fa fa-arrow-right' style='font-size: 170%;'></li></div>";
										echo "<div class='col-md-5 time'>".$routerow['departure']."</div>
											</div>";
										echo "	<div class='row' style='font-size:130%;'>
												22h 20min
											</div>";
										echo "<div class='row'>
												<a href='#' >Boarding Points</a>
											</div>
										</div>";
										echo "<div class='col-sm-2'>
											<div class='col-sm-4'></div>
											<div class='col-sm-8 time'>".
												$seatcheckrow['seatsleft']."
											</div>
										</div>";
										echo "<div class='col-sm-3'>
											<div class='row' style='font-size: 130%; font-weight: 140%;'>".
												$routerow['amount'].
											"</div>";
										echo "<div class='row'>
												<div class='col-sm-6'>
												<a class='link-text' href='search_seat_layout_seater.php?busid=$bid'><button class='btn btn-default' style='background-color: #0066ff; color: #fff;'>View Seater Seats</button></a>
						</div>
						<div class='col-sm-6'>
						<a class='link-text' href='search_seat_layout_sleeper.php?busid=$bid'><button class='btn btn-default' style='background-color: #0066ff; color: #fff;'>View Sleeper Seats</button></a>
						</div>
											</div>
										</div>
									</div>
								</div>";
								}
							}
						}
						else
						{
							$businfo="SELECT * FROM bus_info WHERE bid='$bid'";
							$businforesult=$conn->query($businfo);
							if($businforesult->num_rows===1)
							{
								$businforow=mysqli_fetch_assoc($businforesult);
								$totalseat=$businforow['seatcapacity'];
								$sleeper=$businforow['sleepercapcity'];
								$seatinsert="INSERT INTO seat_avaibility VALUES ('$bid','$ddate','$totalseat','$totalseat','$sleeper','$sleeper')";
								if($conn->query($seatinsert))
								{}
								else
								{
									echo "Error: " . $seatinsert . "<br>" . $conn->error;
								}
								echo "<div class='row box'>
									<div>
										<div class='col-sm-4'>
											<div class='col-sm-2'><i class='fa fa-bus sub-w3l' aria-hidden='true'></i>
											</div>
											<div class='col-sm-10'>
												<div class='row'>";
												echo "<p class='busname'>".$businforow['busname']."</p><br>";
												echo "</div>";
												echo "<div class='row'>";
												echo "<p class='busname'>".$businforow['bus_type']."</p>";
											echo "</div>";

											echo "</div>";
										echo "</div>";
										echo "<div class='col-sm-3'>";
										echo  "<div class='row'>";
										echo  "<div class='col-md-5 time'>".$routerow['arrival']."</div>";
										echo  "<div class='col-md-2'><li class='fa fa-arrow-right' style='font-size: 170%;'></li></div>";
										echo "<div class='col-md-5 time'>".$routerow['departure']."</div>
											</div>";
										echo "	<div class='row' style='font-size:130%;'>
												22h 20min
											</div>";
										echo "<div class='row'>
												<a href='#' >Boarding Points</a>
											</div>
										</div>";
										echo "<div class='col-sm-2'>
											<div class='col-sm-4'></div>
											<div class='col-sm-8 time'>".
												$totalseat."
											</div>
										</div>";
										echo "<div class='col-sm-3'>
											<div class='row' style='font-size: 130%; font-weight: 140%;'>".
												$routerow['amount'].
											"</div>";
										echo "<div class='row'>
												<div class='col-sm-6'>
						<a class='link-text' href='search_seat_layout_seater.php?busid=$bid'><button class='btn btn-default' style='background-color: #0066ff; color: #fff;'>View Seater Seats</button></a>
						</div>
						<div class='col-sm-6'>
						<a class='link-text' href='search_seat_layout_sleeper.php?busid=$bid'><button class='btn btn-default' style='background-color: #0066ff; color: #fff;'>View Sleeper Seats</button></a>
						</div>
											</div>
										</div>
									</div>
								</div>";


							}
						}
					}
				}
			}
		?>
		<!--<div class="row box ">
			<div>
				<div class="col-sm-4">
					<div class="col-sm-2"><i class="fa fa-bus sub-w3l" aria-hidden="true"></i>
					</div>
					<div class="col-sm-10">
						<div class="row">
						<p class="busname">SARALA BUS</p><br>
						</div>
						<div class="row">
						<p class="busname">VOLVO SEMI SLEEPER</p>
					</div>

					</div>
				</div>
				<div class="col-sm-3">
					<div class="row">
						<div class="col-md-5 time">10:30</div>
						<div class="col-md-2"><li class="fa fa-arrow-right " style="font-size: 170%;"></li></div>
						<div class="col-md-5 time">10:30</div>
					</div>
					<div class="row" style="font-size:130%;">
						22h 20min
					</div>
					<div class="row">
						<a href="#" >Boarding Points</a>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="col-sm-4"></div>
					<div class="col-sm-8 time">
						44 seats
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row" style="font-size: 130%; font-weight: 140%;">
						INR 2000
					</div>
					<div class="row">
						<div class='col-sm-6'>
						<a class='link-text' href='#?busid='$bid'><button class='btn btn-default' style='background-color: #0066ff; color: #fff;'>View Seater Seats</button></a>
						</div>
						<div class='col-sm-6'>
						<a class='link-text' href='#?busid='$bid'><button class='btn btn-default' style='background-color: #0066ff; color: #fff;'>View Sleeper Seats</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>	-->
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
						<p>OFFICE ADDRESS</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-phone"></i>
					<div class="w3-address1">
						<p>+91-000-000-00000</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-envelope"></i>
					<div class="w3-address1">
						<p><a href="mailto:info@example.com">myebusservie@gmail.com</a></p>
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
</body>
</html>