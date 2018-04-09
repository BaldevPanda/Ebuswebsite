<?php
	//session_start();
	include "connect.php";
	//$bid=$_REQUEST['busid'];
	$seatsql="SELECT layout,seatcapacity FROM bus_info WHERE bid='SA6979'";
	$seatresult=$conn->query($seatsql);
	$seatrow=mysqli_fetch_assoc($seatresult);
	$filename=(string)$seatrow['layout'].(string)$seatrow['seatcapacity'].".php";
	header("location:seat_layout/$filename");
?>