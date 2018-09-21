<?php
include 'zebradb/zebra.php';

$db = new Zebra_Database();

// turn debugging on
$db->debug = true;

$db->connect('mysql.hostinate.com', 'u923235092_green', 'pji85377', 'u923235092_green');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Cargo Tracking Administration </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
        .top {
            color: #E9F6F9;
            background-color: #080808;
            padding: 4%;
        }
        .logo{
            margin: 0;
            margin-top: -3%;
        }
        
    </style>
    </head>
    <body>
        <div class="container-fluid">
            
            <div class="row">
                          <!-- Static navbar -->
                          <div class="navbar navbar-default navbar-static-top top" role="navigation" style="padding-left: 7%;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand logo" href="index.php"> <h1> OneWorld Courier Shipment Control </h1> </a>
            
            
            
        </div>
                 
          
          <div class="navbar-collapse collapse">
           
            <!--
          <ul class="nav navbar-nav">
              <li><a href="#"> ...fundamental preparation </a></li>          
          </ul>
            -->
            
          <ul class="nav navbar-nav navbar-right">
              
            
          </ul>
        </div><!--/.nav-collapse -->
        
      </div>
    </div>
            </div>
            
            
                <div class="container-fluid">
                    
                
                 
            </div>
            
            <!-- End of sliding carousel. Beginning of three column content -->
            
            <div class="container">
                <div class="row">
                
                <div class="col-md-8">
                    
                    <div style="margin: 10% 0;">
                        
                        <h3> Available Tracking Details </h3>
                        
                        <table class="table table-striped">
                            
                            <tr>
                                
                                <td> Serial Number </td>
                                
                                <td> Tracking Code </td>
                                
                                <td> Current Location </td>
                                
                                <td> Receivers Name </td>
                                
                                <td> Action </td>

<td> Delete </td>


                                
                            </tr>
                            
                            <?php



$db->query("SELECT tid, tcode, status, receiver FROM tdetails");

while($row = $db->fetch_assoc()){
    $tid = $row['tid'] ;
    $tcode = $row['tcode'];
    $status = $row['status'];
    $receiver = $row['receiver'];
    
    print " <tr> <td> $tid </td>  <td> $tcode </td>  <td> $status </td> <td> $receiver </td> <td> <a href='newlocal.php?id=$tid'> Change Location </a> </td> <td> <a href='delete.php?id=$tid'> Remove </a> </td> </tr>";
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
                            
                        </table>
                        
                        
                    </div>
                    
                </div>
                    
                                        
                    <div class="col-md-4">
                        
                                                
                    </div>
                    
                               
            </div>
            </div>
            
            <hr>
                           
            <div class="container-fluid footer ">
                
                <p class="text-center"> 
                    <small> Copyright &copy 2016 GreenStar Express </small>
                </p>
                
            </div>
            
        </div>
        
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>	