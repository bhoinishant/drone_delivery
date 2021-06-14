<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EYS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="zcontent/css/style.css">
<link rel="stylesheet" href="zcontent/css/responsee.css">
<link rel="stylesheet" href="zcontent/css/style2.css"/>
</head> 
<body>
<nav class="navbar navbar-inverse navbar-expand-xl">
  
    <div class="navbar-header d-flex col">
    <a class="navbar-brand" href="#"><i class="fa fa-cube"></i>DRONELLA</b></a>      
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
      <span class="navbar-toggler-icon"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
   <div id="navbarCollapse" class="collapse navbar-collapse ">   
    <ul class="nav navbar-nav navbar-right ml-auto">
      <li class="nav-item active"><a href="../index.html" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a></li>
      <li class="nav-item"><a href="../contact/index.php" class="nav-link"><i class="fa fa-address-card "></i><span>Contact Us</span></a></li>   
    </ul>
  </div>

</nav>
<div>
     <div class="form-group">
                    <h2 style="text-align: center;">Register for SHOP REGISTRATION</h2>
                </div>

                <div class="form-group">
                    <hr/>
                </div>
  <div class="col-md-6 col-sm-6" style="float: left;">

 
               

  <form method="post" action="insert.php" enctype="multipart/form-data" name="regform" onSubmit="return validate();" style="height: 600px;">


    <div class="form-group ">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                       
                        <input type="text" name="fname" class="form-control" placeholder="Enter Firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                       
                        <input type="text" name="lname" class="form-control" placeholder="Enter Lastname" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                
                        <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    
                        <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" required >
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                        
                        <input type="number" name="altphone" class="form-control" placeholder="Enter Alternate Number" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-option-vertical"></span></span>
                        <input type="text" name="gst" class="form-control" placeholder="Enter GST Number" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-option-vertical"></span></span>
                         <input type="text" name="dl" class="form-control" placeholder="Enter DRUGS LISENCE" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-option-vertical"></span></span>
                        <input type="number" name="aadhar" class="form-control" placeholder="Enter AADHAR NUMBER" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-option-vertical"></span></span>
                        <input type="text" name="pan" class="form-control" placeholder="Enter PAN NUMBER" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-option-vertical"></span></span>
                        <input type="text" name="location" class="form-control" placeholder="Enter Location" />
                    </div>
                </div>


                <div class="checkbox">
                    <label><input type="checkbox" id="TOS" value="This"><a href="#">I agree with
                            terms of service</a></label>
               </div>
               <div class="input-group">
            <button type="submit" style="background-color: #FF5900; width: 620px;" class="btn btn-primary" name="submit" type="submit">Register</button>
        </div>
    
  </form>
</div>
<div class="col-md-6 col-sm-6" style=" float: right;">
   <img style=" width: 100%; height: 550px;" src="img/dd2.jpg">
</div></div>
</div>


</body>
</html>                                                        