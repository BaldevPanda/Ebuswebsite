<?php
ob_start();
include 'connect.php';
if(isset($_REQUEST['submit']))
{
    $tranid=$_POST['tran'];
    $sql="SELECT contact FROM booking WHERE transactionid='$tranid' AND transactionresult='success'";
    $result=$conn->query($sql);
    if($result->nm_rows > 0)
    {
    $row=mysqli_fetch_assoc($result);
    //Your authentication key
    $authKey = "7838AQyTHGZTnC5a2d9351";

    //Multiple mobiles numbers separated by comma
    $mobileNumber = $row['contact'];

    //Sender ID,While using route4 sender id should be 6 characters long.
    $senderId = "102234";

    //Your message to send, Add URL encoding here.
    $message = urlencode("Test message");

    //Define route 
    $route = "default";
    //Prepare you post parameters
    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId,
        'route' => $route
    );

    //API URL
    $url="http://sms.bulk24sms.com/api/sendhttp.php";

    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        //,CURLOPT_FOLLOWLOCATION => true
    ));


    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


    //get response
    $output = curl_exec($ch);

    //Print error if any
    if(curl_errno($ch))
    {
        echo 'error:' . curl_error($ch);
    }

    curl_close($ch);

    echo $output;
    }
    else
    {

    }

}
?>
