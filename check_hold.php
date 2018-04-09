<?php
include 'connect.php';
$tt=time();
$sql="SELECT * FROM booking WHERE transactionresult='hold'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$trid=$row['transactionid'];
		$bid=$row['bid'];
		$a_date=$row['a_date'];
		$diff=$tt-$row['transactiontime_sec'];
		if($diff>=600)
		{
			$update="UPDATE booking set transactionresult='failure' WHERE transactionid='$trid'";
			if($conn->query($update))
			{
				$seatdec="UPDATE seat_avaibility set seatsleft=seatsleft+1 WHERE bid='$bid' AND a_date='a_date'";
				if(!$conn->query($seatdec))
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			else
			{
				echo "ERROR";
			}
			}
		}
	}	
?>