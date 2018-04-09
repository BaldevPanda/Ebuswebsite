<?php 
ob_start();
session_start();
if(!isset($_POST['fname'])){header("location: index.php");}
// Change the Merchant key here as provided by Payumoney
$MERCHANT_KEY = "gtKFFx";

// Change the Merchant Salt as provided by Payumoney
$SALT = "eCwWELxi";


	$firstname =$_POST['fname'];
	$lastname =$_POST['lname'];
	$phone =$_POST['contact'];
	$email =$_POST['email'];
	$txnid =$_POST['tranid'];
	$amount =$_POST['amount'];
	$service_provider =$_POST['service_provider'];
	$productinfo =$_SESSION['seat'];
	$surl =$_POST['success_url'];
	$furl =$_POST['failure_url'];
	
	//$ =$_POST[''];

	$hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$SALT;
	$hash =strtolower(hash("sha512", $hashseq)); 
	

?>


<!DOCTYPE html>
<html>
<head>

<title>Payment Processing</title>
	<script>
    function submitForm() {
      var postForm = document.forms.postForm;
      postForm.submit();
    }
</script>
</head>
<body onload="submitForm();">

<div>
<h2>Payment Gateway Testing Sample</h2>
<table>
<tr><td>Transaction Id</td><td><strong><?php echo $_POST['txnid']; ?></strong></td><td>Amount: </td><td><strong>Rs. <?php echo $_POST['amount']; ?></strong></td>
</table>
<div >
<p>In this page we will genrate hash and send it to payumoney.</p>
<br>
<p>Please be patient. this process might take some time,<br />please do not hit refresh or browser back button or close this window</p>
</div>
</div>

<div>
	<form name="postForm" action="https://test.payu.in/_payment" method="POST" >
		<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
		<input type="hidden" name="hash" value="<?php echo $hash;  ?>"/>
		<input type="hidden" name="txnid" value="<?php echo $txnid;  ?>" />
		<input type="hidden" name="amount" value="<?php echo $amount;  ?>" />
		<input type="hidden" name="firstname" value="<?php echo $firstname;  ?>" />
		<input type="hidden" name="email" value="<?php echo $email;  ?>" />
		<input type="hidden" name="phone" value="<?php echo $phone;  ?>" />
		<input type="hidden" name="productinfo" value="<?php echo $productinfo;  ?>" />
		<input type="hidden" name="service_provider" value="My-Ebus" size="64" />
		<input type="hidden" name="surl" value="<?php echo $surl;  ?>" />
		<input type="hidden" name="furl" value="<?php echo $furl;  ?>" />
	</form>
</div>
</body>
</html>