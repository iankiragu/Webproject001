<?php
session_start();
// initializing variables
$FirstName = "";
$email    = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
  $Surname = mysqli_real_escape_string($db, $_POST['Surname']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $password= mysqli_real_escape_string($db, $_POST['password']);
  $psw_repeat = mysqli_real_escape_string($db, $_POST['pswr_repeat']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($Surname)) { array_push($errors, "Surname is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $psw_repeat) {
	array_push($errors, "The passwords do not match");
  }
  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
    if ($user['Email'] === $Email)
    {
      array_push($errors, "This Email already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database
    	$query = "INSERT INTO users (Firstname,Surname,Email,Password,Gender)
  			  VALUES('$Firstname','$Surname','$email','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['Email'] = $Email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Home.php');
  }
}
