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
include 'phpmailer/PHPMailerAutoload.php';

$db = new Zebra_Database();

// turn debugging on
$db->debug = true;

$db->connect('mysql.hostinate.com', 'u923235092_green', 'pji85377', 'u923235092_green');

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
    
    //alert receiver that a shipping has been initiated on his behalf

    $mail = new PHPMailer;


$mail->From = 'no-reply@greenstar.blg.lt';
$mail->FromName = 'Greenstar Express';
$mail->addAddress($remail, $receiver);     // Add a recipient


// $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New Shipment Details';
$mail->Body    = "<h2> Shipment dispatched on $emailst  </h2>
                              
                    
                    <table cellspacing='5'>
                        <tr>
                            <td> Tracking ID </td>
                            <td> <strong> $tcode </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Sender's name </td>
                            <td> <strong> $sender </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Sender's address </td>
                            <td> <strong> $saddress </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Cargo Item </td>
                            <td> <strong> $item </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Cargo's Destination </td>
                            <td> <strong> $destination </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Shipment Status </td>
                            <td> <strong> $status </strong>  </td>
                        </tr>
                        
                        <tr>
                            <td> Date of Shipment </td>
                            <td> <strong> $sentdate </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Receiver's Name </td>
                            <td> <strong> $receiver </strong>  </td>
                        </tr>
                        
                        <tr>
                            <td> Receiver's Phone Number </td>
                            <td> <strong> $rphone </strong>  </td>
                        </tr>
                        
                        <tr>
                            <td> Receiver's Email Address </td>
                            <td> <strong> $remail</strong>  </td>
                        </tr>

			<tr>
                            <td> Receiver's Home Address </td>
                            <td> <strong> $raddress</strong>  </td>
                        </tr>
                    </table>
        <hr/>
<p> </p>

<small> 
    Thank you for choosing GreenStar Express. Please make sure you keep the content of this email safe from unauthorised parties. Take note of your tracking code <strong> $tcode </strong>. Do not reveal it to anyone else.
</small>
        ";

// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

    
    print "<br> Shipping information successfully entered";
    
}


// this should always be present at the end of your scripts;
// whether it should output anything should be controlled by the $debug property
$db->show_debug_console();


?>