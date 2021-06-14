<?php

$conn = mysqli_connect('localhost','root','','dronella');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$altphone = $_POST['altphone'];
$gst = $_POST['gst'];
$dl = $_POST['dl'];
$location = $_POST['location'];
$aadhar = $_POST['aadhar'];
$pan = $_POST['pan'];


$sql = "INSERT INTO med( fname, lname, email,phone,altphone,gst,dl,location,aadhar,pan) VALUES('$fname', '$lname','$email','$phone','$altphone', '$gst', '$dl', '$location', '$aadhar', '$pan')";

if(mysqli_query($conn,$sql))
{
	echo "Registerd Successfully";
	header('location: r2.php');
}
else
{
	echo mysqli_error($conn);
}

?>