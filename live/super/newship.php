<?php

$tcode = $_POST['tcode'];
$sender = $_POST['sender'];
$saddress = $_POST['saddress'];
$item = $_POST['item'];
$destination = $_POST['destination'];
$status = $_POST['status'];
$sentdate = $_POST['sentdate'];
$receiver = $_POST['receiver'];
$rphone = $_POST['rphone'];
$remail = $_POST['remail'];
$raddress = $_POST['raddress'];


$emailst = date('l, F jS, Y');

include 'zebradb/zebra.php';
//include 'phpmailer/PHPMailerAutoload.php';

$db = new Zebra_Database();

// turn debugging on
$db->debug = true;

$db->connect('127.6.253.130', 'adminHK68l7y', 'Gy_1Xeuaw-Jr', 'express');

if(
$db->insert(
    'tdetails',
    array(
        'tcode' => $tcode,
        'sender' => $sender,
        'saddress' => $saddress,
        'item' => $item,
        'destination' => $destination,
        'status' => $status,
        'sentdate' => $sentdate,
        'receiver' => $receiver,
        'rphone' => $rphone,
        'remail' => $remail,
	'raddress' => $raddress,
    )
)
        )
{
    


    
   print "<br> Shipping information successfully entered";
    
}


// this should always be present at the end of your scripts;
// whether it should output anything should be controlled by the $debug property
//$db->show_debug_console();


?>