<?php
ob_start();
include 'connect.php';
if(isset($_REQUEST['submit']))
{
	$tranid=$_POST['tran'];
	$chsql="SELECT * FROM booking WHERE transactionid='$tranid'";
	$chresult=$conn->query($chsql);
	if($chresult->num_rows > 0)
	{
		$chrow=mysqli_fetch_assoc($chresult);
		if(!strcmp($chrow['transactionresult'],'success'))
		{
			$bookdate=$chrow['a_date'];
			$canceldate=date('yyyy-mm-dd');
			$cancel_time=date("h:i:s",time());
			$bid=$chrow['bid'];
			$tm=time();
			/*
			$diff=$chrow['transactiontime_sec']-$tm;
			if($tm > 21600)
			{
				$disc=0.75*$chrow['amount'];
			}
			else if ($tm < 21600 || $tm > )
			{
				
			}*/
			$sql="INSERT INTO cancellation(a_date,transactionid,cancel_date,cancel_time,refund_status,refund_amount,bid) VALUES ('$bookdate','$tranid','canceldate','$cancel_time','On-hold','$amt','$bid')";
			if($conn->query($sql))
			{
				$_SESSION['cancel_req']=1;
			}
			else
			{
				$_SESSION['cancel_req']=0;
			}

		}
		else
		{
			$_SESSION['cancel_req']=2;
		}
	}
	else
	{
		$_SESSION['cancel_req']=2;
	}
}

?>