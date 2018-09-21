<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> New Shipment </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="flag/css/flag-icon.min.css" type="text/css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
        .top {
            background-color: #dca7a7 !important;
        }
        .logo{
            margin: 0;
            margin-top: -3%;
        }
        .simg {
            width: 100%;
            height: auto;
        }
    </style>
    </head>
    <body>
                <div class="container-fluid">
                    
                <div class="jumbotron banner">
                    
                    
                    <h2> <strong> New Shipment </strong> </h2>
                       
                    </div>
                 
            </div>
            
            <!-- End of sliding carousel. Beginning of three column content -->
            
            <div class="container">
                <div class="row"  style="margin: 2% 0;">
                                   
                    <div class="col-md-8">
                    
                    <div>
                        
                        <form role="form" method="post" action="newship.php">
                            
                            <div class="form-group">
                                        <label> Enter New Tracking Number </label>
                                   
                                        <input type="text" class="form-control" name="tcode" placeholder="Example: 654****363"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Sender's Full Name </label>
                                   
                                        <input type="text" class="form-control" name="sender" placeholder="Example: Paul Smith"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Sender's Address </label>
                                   
                                        <input type="text" class="form-control" name="saddress" placeholder="Example: 23, Sunset Boulevard Drive, California, USA"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Items in the package </label>
                                   
                                        <input type="text" class="form-control" name="item" placeholder="Example: Apple iPad, iPhone and Blackberry Phone"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Shipping Destination </label>
                                   
                                        <input type="text" class="form-control" name="destination" placeholder="City/State and Country where shipment is going"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Shipment Current Location </label>
                                   
                                        <input type="text" class="form-control" name="status" placeholder="Example: Heathrow Airport, London"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Date Item Was Shipped </label>
                                   
                                        <input type="text" class="form-control" name="sentdate" placeholder="Example: August 8, 2015"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Receiver's Full Name </label>
                                   
                                        <input type="text" class="form-control" name="receiver" placeholder="Example: Agnes Aberdeen"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Receiver's Phone Number </label>
                                   
                                        <input type="tel" class="form-control" name="rphone" placeholder="Example: 004689202023"/>
                                </div>
                            
                            <div class="form-group">
                                        <label> Enter Receiver's Email Address </label>
                                   
                                        <input type="email" class="form-control" name="remail" placeholder="Example: agnes.a@aol.com"/>
                                </div>
                            
<div class="form-group">
                                        <label> Enter Receiver's Home Address </label>
                                   
                                        <input type="text" class="form-control" name="raddress" placeholder="home address of the receiver"/>
                                </div>

                            <button type="submit" class="btn btn-lg btn-info"> Click to Submit </button>
                            
                        </form>
                        
                    </div>
                    
                </div>
                
                <div class="col-md-4">
                    
                    
                  </div>
                   
                </div>                                       
                    
                               
            </div>
            </div>
            
            <hr>
                           
            <div class="container-fluid footer ">
                
                <p class="text-center"> 
                    <small> Copyright &copy 2016 Greenstar Express </small>
                </p>
                
            </div>
            
        </div>
        
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>