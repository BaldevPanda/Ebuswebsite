<?php
ob_start();
session_start();
include "connect.php";
$mname="";
if(isset($_REQUEST['submit']))
{
	$tranid=$_SESSION['trans_id'];
	echo $tranid;
	$fname=$_POST['fname'];
	if(!empty($_POST['mname']))
	{
		$mname=$_POST['mname'];
	}
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$phno=$_POST['phno'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$updatesql="UPDATE booking set first_name='$fname', middle_name='$mname', last_name='lname', age ='$age', sex='$sex', contact='$phno', email_id='$email' WHERE transactionid='$tranid'";
	if($conn->query($updatesql))
	{
		header("location:confirm.php?tranid=".$tranid);
	}
}
?>