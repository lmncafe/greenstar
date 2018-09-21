<?php

$tcode = $_POST['tcode'];

include 'zebradb/zebra.php';

$db = new Zebra_Database();

// turn debugging on
$db->debug = true;

$db->connect('mysql.hostinate.com', 'u923235092_green', 'pji85377', 'u923235092_green');


$db->query("SELECT sender, saddress, item, destination, status, sentdate, receiver, raddress, rphone, remail FROM tdetails WHERE tcode = '$tcode'");

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
     $raddress = $row['raddress'];
   }

  
if($sender){
       // check if the record exist in the database, if not, run else statement
   }
else
{
     print "The tracking code you entered is not available in our shipping records. <a href='tyc.html'> Click here to go back </a> ";
     die();
}


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Welcome GreenSTAR Express International </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                
                padding-bottom: 20px;
            }
            @font-face {
    font-family: 'si';
    src: url('socicon/socicon.eot');
    src: url('socicon/socicon.eot?#iefix') format('embedded-opentype'),
         url('socicon/socicon.woff') format('woff'),
         url('socicon/socicon.ttf') format('truetype'),
         url('socicon/socicon.svg#icomoonregular') format('svg');
    font-weight: normal;
    font-style: normal;

}

@media screen and (-webkit-min-device-pixel-ratio:0) {
    @font-face {
        font-family:si;
        src: url(socicon/socicon.svg) format(svg);
    }
}

.soc {
    overflow:hidden;
    margin:0; padding:0;
    list-style:none;
}

.soc li {
    display:inline-block;
    *display:inline;
    zoom:1;
}

.soc li a {
    font-family:si!important;
    font-style:normal;
    font-weight:100;
    -webkit-font-smoothing:antialiased;
    -moz-osx-font-smoothing:grayscale;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    -ms-box-sizing:border-box;
    -o-box-sizing:border-box;
    box-sizing:border-box;
    overflow:hidden;
    text-decoration:none;
    text-align:center;
    display:block;
    position: relative;
    z-index: 1;
    width: 20px;
    height: 20px;
    line-height: 20px;
    font-size: 11px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-right: 4px;
    color: #ffffff;
    background-color: none;
}

.soc-icon-last{
    margin:0 !important;
}

.soc-twitter {
    background-color: #4da7de;
}
.soc-twitter:before {
    content:'\e040';
}
.soc-facebook {
    background-color: #3e5b98;
}
.soc-facebook:before {
    content:'\e041';
}
.soc-googleplus {
    background-color: #dd4b39;
}
.soc-googleplus:before {
    content:'\e042';
}
.soc-pinterest {
    background-color: #c92619;
}
.soc-pinterest:before {
    content:'\e043';
}
.soc-linkedin {
    background-color: #3371b7;
}
.soc-linkedin:before {
    content:'\e049';
}
.soc-rss {
    background-color: #f26109;
}
.soc-rss:before {
    content:'\e00b';
}

@media (max-width: 450px) { 
    .navbar-nav li a {
        font-size: 120%;      
    }
    .navbar-brand img {
      text-align: right;
    }

    .navbar-brand { 
    max-height: 75px;
    max-width: 70%; 
    overflow: visible;
    padding-top: 0;
    padding-bottom: 0; 
}
}


        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/normalize.min.css">

        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   
<nav class="navbar navbar-default" style="z-index: 10000; border-bottom: 3px solid #f0f0f0;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img src="logo.png" class="img img-responsive" style="margin-top: -3%; display: block; width: 65%; height: auto;" /> </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 3%;">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">About</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <li><a href="tyc.html"> Tracking </a></li>
        <li><a href="#"> <small> English </small> </a></li>
        <li><a href="por/tyc.html"> <small> Portuguese </small> </a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
            
            
            <div class="container" style="margin-top: 5%; margin-bottom: 5%;">
                <div class="row">
                
                <div class="col-md-6">
                    <p class="lead"> Cargo Status as at <?php print date('l, F jS, Y'); ?>  </p>
                              
                    
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td> Tracking ID </td>
                            <td> <strong> <?php echo $tcode; ?> </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Sender's name </td>
                            <td> <strong> <?php echo $sender; ?> </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Sender's address </td>
                            <td> <strong> <?php echo $saddress; ?> </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Cargo Item </td>
                            <td> <strong> <?php echo $item; ?> </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Cargo's Destination </td>
                            <td> <strong> <?php echo $destination; ?> </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Shipment Status </td>
                            <td> <strong> <?php echo $status; ?> </strong>  </td>
                        </tr>
                        
                        <tr>
                            <td> Date of Shipment </td>
                            <td> <strong> <?php echo $sentdate; ?> </strong> </td>
                        </tr>
                        
                        <tr>
                            <td> Receiver's Name </td>
                            <td> <strong> <?php echo $receiver; ?> </strong>  </td>
                        </tr>
                        
                        <tr>
                            <td> Receiver's Phone Number </td>
                            <td> <strong> <?php echo $rphone; ?> </strong>  </td>
                        </tr>
                        
                        <tr>
                            <td> Receiver's Email Address </td>
                            <td> <strong> <?php echo $remail; ?> </strong>  </td>
                        </tr>

			<tr>
                            <td> Receiver's Home Address </td>
                            <td> <strong> <?php echo $raddress; ?> </strong>  </td>
                        </tr>

                    </table>
                    
                    <a href="tyc.html" class="btn btn-default" style="width: 35%; display: block; padding: 0.6em"> <<< Go Back </a>
                    
                </div>
                    
                    <div class="col-md-1">
                    
                    </div>
                    
                    <div class="col-md-5"  style="margin-top: 3%; margin-bottom: 5%;">
                        <h4> Cargo Movement History </h4>
                        
                        <table class="table table-bordered">
                            
                            <tr>
                                <td> <strong> Date </strong>  </td>
                                
                                <td> <strong> Location </strong>  </td>
                            </tr>
                        
                        
                        <?php
                    $db->query("SELECT hdate, hlocal FROM history WHERE tcode = '$tcode'");

while($row = $db->fetch_assoc()){
    $hdate = $row['hdate'] ;
    $hlocal = $row['hlocal'];
    
    print " <tr> <td> $hdate </td>  <td> $hlocal </td> </tr>";
}

?>
                            <tr class="danger">
                                <td> <strong> Current Location </strong>  </td>
                                
                                <td> <?php print "$status"; ?>  </td>
                            </tr>          
                    </table>
                        
                    </div>
                                        
            </div>
            </div>
            
                           
<footer style="padding: 4% 0 0; border-top: 5px solid #808080;">
        <p class="text-right" style="margin-top: -2%; display: block;"> <ul class="soc">
    <li><a class="soc-twitter" href="#"></a></li>
    <li><a class="soc-facebook" href="#"></a></li>
    <li><a class="soc-googleplus" href="#"></a></li>
    <li><a class="soc-pinterest" href="#"></a></li>
    <li><a class="soc-linkedin" href="#"></a></li>
    <li><a class="soc-rss soc-icon-last" href="#"></a></li>
    </ul> 
    </p>
        
        <p> GreenSTAR Express International Shipping Pty. &copy; 2016</p>
      </footer>
</div>
    <script src="js/jquery-1.11.2.min.js"></script>

        <script src="js/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>        

    </body>
</html>