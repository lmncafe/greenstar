<?php


include 'zebradb/zebra.php';
include 'phpmailer/PHPMailerAutoload.php';

$db = new Zebra_Database();

// turn debugging on
$db->debug = true;

$db->connect('mysql.hostinate.com', 'u923235092_green', 'pji85377', 'u923235092_green');

$tid = $_POST['tid'];
$tcode = $_POST['tcode'];
$newstatus = $_POST['newlocal'];
$oldtcode = $_POST['oldtcode'];


$tdate = date('D, M d, Y');

$db->query("UPDATE tdetails SET status = '$newstatus' WHERE tid = '$tid'");
  
$db->insert(
    'history',
    array(
        'tcode' => $tcode,
        'hdate' => $tdate,
        'hlocal' => $oldtcode,
    )
        );


$db->query("SELECT sender, saddress, item, destination, status, sentdate, receiver, rphone, remail FROM tdetails WHERE tcode = '$tcode'");

   while($row = $db->fetch_assoc()){
     $sender = $row['sender'];
     $saddress = $row['saddress'];
     $item = $row['item'];
     $destination = $row['destination'];
     $status = $row['status'];
     $sentdate = $row['sentdate'];
     $receiver = $row['receiver'];
     $rphone = $row['rphone'];
     $remail = $row['remail']; 
     
   }

   $emailst = date('l, F jS, Y');
   
$mail = new PHPMailer;


$mail->From = 'no-reply@greenstar.blg.lt';
$mail->FromName = 'GreenStar Express';
$mail->addAddress($remail, $receiver);     // Add a recipient


// $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Automated Shipment Status Alert';
$mail->Body    = "<h2> Shipment current location on $emailst  </h2>
                              
                    
                    <table cellspacing='5'>
                        <tr>
                            <td> Current Cargo Location </td>
                            <td> <strong> $newstatus </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Sender's name </td>
                            <td> <strong> $sender </strong> </td>
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
                    </table>
        <hr/>
<p> </p>

<small>This email, together with any attachments, is for the exclusive and confidential use of the address(es) and may contain legally privileged information. Any other distribution, use or reproduction without the sender's prior consent is unauthorized and strictly prohibited. If you have received this message in error, please notify the sender by email immediately and delete this message from your device without making any copies</small>
        ";

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


        print "You have successfully changed the cargo current location. <a href='index.php'> Click here to return home </a>";
?>
