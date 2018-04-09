<?php
    include "connect.php"; 
?>
<!doctype html>
<html>
<head>
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
    <meta charset="utf-8">
    <title></title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body  onload="window.print();">
    <?php
        $seatid="";
        if(isset($_REQUEST['submit']))
        {
            $tranid=$_POST['tran'];
            $sql="SELECT * FROM booking WHERE transactionid='$tranid' and transactionresult='success'";
            $result=$conn->query($sql);
            $row=mysqli_fetch_assoc($result);
            $seatid=$seatid.$row['seatno'];
            if($result->num_rows >0)
            {
                while ($row=mysqli_fetch_assoc($result))
                {
                    $seatid=$seatid.",".$row['seatno'];
                    $bid=$row['bid'];
                    $rid=$row['rid'];
                    $bookingon=$row['transaction_date'];
                    $fname=$row['first_name'];
                    $lname=$row['last_name'];
                    $bookdate=$row['a_date'];
                    $amount=$row['amount'];
                    $email=$row['email_id'];
                }
            }
            

            $bussql="SELECT * FROM bus_info WHERE bid='$bid'";
            $busresult=$conn->query($bussql);
            $busrow=mysqli_fetch_assoc($busresult);
            
            $routesql="SELECT * FROM route WHERE rid='$rid'";
            $routeresult=$conn->query($routesql);
            $routerow=mysqli_fetch_assoc($routeresult);
            $count="SELECT count(transactionid) as ctran FROM booking WHERE transactionid='$tranid' AND transactionresult='success'";
            $countresult=$conn->query($count);
            $countrow=mysqli_fetch_assoc($countresult);
        }
    ?>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h2><a class="logo"><i class="fa fa-bus" aria-hidden="true"></i>My-Ebus</a></h2>
                            </td>
                            
                            <td>
                                Transaction ID #: <?php echo $tranid; ?><br>
                                Booked on: <?php echo $bookingon; ?><br>
                                Date of Journey: <?php echo $bookdate; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Baramunda,<br>
                                Bhubaneswar - 751003
                            </td>
                            
                            <td>
                                <?php 
                                    echo $fname." ".$lname."<br>".$email; 
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>          
            <tr class="heading">
                <td>
                    Booking Details
                </td>
            </tr>
            <tr class="item">
                <td>
                    Bus Number
                </td>
                
                <td>
                    <?php echo $busrow['busnumber']; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Bus Name
                </td>
                
                <td>
                    <?php echo $busrow['busname']; ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Bus Number
                </td>
                
                <td>
                    <?php echo $busrow['busnumber']; ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    From 
                </td>
                
                <td>
                    <?php echo $routerow['b_start']; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    To
                </td>
                
                <td>
                    <?php echo $routerow['end_to']; ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Scheduled Departure
                </td>
                
                <td>
                    <?php echo $routerow['arrival']; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Number of Seats
                </td>
                
                <td>
                    <?php echo $countrow['ctran']; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Seat Number
                </td>
                
                <td>
                    <?php echo $seatid; ?>
                </td>
            </tr>

            <tr class="item last">
                <td>
                    Total Amount
                </td>
                
                <td>
                    <?php echo $amount; ?>
                </td>
            </tr>
        </table>
    </div>
    <?php $conn->close(); ?>
</body>
</html>
