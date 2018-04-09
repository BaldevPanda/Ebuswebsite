<?php
	ob_start();
	session_start();
	include "connect.php";
	include "check_hold.php";
	$bid=$_REQUEST['busid'];
	$_SESSION['busid']=$bid;
	echo $_SESSION['busid'];
	$seatsql="SELECT layout,seatcapacity FROM bus_info WHERE bid='$bid'";
	$seatresult=$conn->query($seatsql);
	$seatrow=mysqli_fetch_assoc($seatresult);
	$filename="seat_layout/".(string)$seatrow['layout'].(string)$seatrow['seatcapacity'].".php";
	$_SESSION['filename']=$filename;
	header("location:1.php");
?>