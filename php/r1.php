<?php
include('includes/config.php');
if(isset($_POST['submit']))
{

$file = $_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$folder="images/"; 
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$altmobile=$_POST['altmobile'];
$d_type=$_POST['d_type'];
$d_range=$_POST['d_range'];
$uin=$_POST['uin'];
$aadhar=$_POST['aadhar'];
if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $image=$final_file;
    }
$notitype='Create Account';
$reciver='Admin';
$sender=$email;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();    
    
$sql ="INSERT INTO pilot(fname,lname, email, mobile,altmobile , image, d_type,d_range,uin,aadhar, status) VALUES(:fname,:lname, :email, :mobile,:altmobile,:image, :d_type, :d_range, :uin, :aadhar, 1 )";
$query= $dbh -> prepare($sql);
$query-> bindParam(':fname', $fname, PDO::PARAM_STR);
$query-> bindParam(':lname', $lname, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> bindParam(':altmobile', $altmobile, PDO::PARAM_STR);
$query-> bindParam(':image', $image, PDO::PARAM_STR);
$query-> bindParam(':d_type', $d_type, PDO::PARAM_STR);
$query-> bindParam(':d_range', $d_range, PDO::PARAM_STR);
$query-> bindParam(':uin', $uin, PDO::PARAM_STR);
$query-> bindParam(':aadhar', $aadhar, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
echo "<script type='text/javascript'> document.location = 'r1.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<script type="text/javascript">

    function validate()
        {
            var extensions = new Array("jpg","jpeg");
            var image_file = document.regform.image.value;
            var image_length = document.regform.image.value.length;
            var pos = image_file.lastIndexOf('.') + 1;
            var ext = image_file.substring(pos, image_length);
            var final_ext = ext.toLowerCase();
            for (i = 0; i < extensions.length; i++)
            {
                if(extensions[i] == final_ext)
                {
                return true;
                
                }
            }
            alert("Image Extension Not Valid (Use Jpg,jpeg)");
            return false;
        }
        
</script>


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
                    <h2 style="text-align: center;">Register for DRONE PILOT</h2>
                </div>

                <div class="form-group">
                    <hr/>
                </div>
  <div class="col-md-6 col-sm-6" style="float: left;">

 
               

  <form method="post" action="r1.php" enctype="multipart/form-data" name="regform" onSubmit="return validate();" style="height: 600px;">


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
                    
                        <input type="number" name="mobile" class="form-control" placeholder="Enter Phone Number" required >
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                        
                        <input type="number" name="altmobile" class="form-control" placeholder="Enter Alternate Number" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-option-vertical"></span></span>
                        <select name="d_type" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-option-vertical"></span></span>
                        <input type="number" name="d_range" class="form-control" placeholder="Enter Drone Range (in KM)" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-option-vertical"></span></span>
                         <input type="text" name="uin" class="form-control" placeholder="Enter UIN Number" required>
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
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                        <input type="file" name="image" class="form-control">
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