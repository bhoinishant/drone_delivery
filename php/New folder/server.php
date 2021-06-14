<?php 
$db = mysqli_connect('localhost', 'root', '', 'dronella');
	session_start();

	// variable declaration
	$fname = "";
	$lname = "";
	$email    = "";
	$phone = "";
	$altphone = "";
	$gst = "";
	$dl = "";
	$location = "";
	$aadhar = "";
	$pan = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$altphone = mysqli_real_escape_string($db, $_POST['altphone']);
		$gst = mysqli_real_escape_string($db, $_POST['gst']);
		$dl = mysqli_real_escape_string($db, $_POST['dl']);
		$pan = mysqli_real_escape_string($db, $_POST['pan']);
		$location = mysqli_real_escape_string($db, $_POST['location']);
		$aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);

		// form validation: ensure that the form is correctly filled
		if (empty($fname)) { array_push($errors, "Firstname is required"); }
		if (empty($lname)) { array_push($errors, "Lastname is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($phone)) { array_push($errors, "Number is required"); }
		if (empty($altphone)) { array_push($errors, "Number is required"); }
		if (empty($gst)) { array_push($errors, " GST Number is required"); }
		if (empty($dl)) { array_push($errors, "Drugs Lisence is required"); }

		if (empty($location)) { array_push($errors, "Location is required"); }
		if (empty($aadhar)) { array_push($errors, "AADHAR Number is required"); }


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "INSERT INTO medicine (fname,lname, email,phone,altphone,gst,dl,pan, location,aadhar,) 
					  VALUES('$fname','$lname', '$email','$phone', '$altphone', '$gst', '$dl','$pan', '$location', '$aadhar')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>