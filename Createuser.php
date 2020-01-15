<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title> Create User</title>
      <link rel="stylesheet" href="body.css">
      <link rel="icon" type="image/png" href="img/device.png">
      <link rel="stylesheet" href="styles.css">
</head>
<body class="Sign">
<form action="Createuser.php" method="post" style="border:"none">
  <?php include('errors.php'); ?>
  <center>
  <div class="container">

      <fieldset style="border-radius: 0.25px;width:650px;background-color: white;padding: 15px 15px 15px 15px">
    <h1>SIGNUP USER</h1>
    <hr>
    <label for="username"></label><br>
    <input type="text" placeholder="Username" name="username"required value="<?php echo $username; ?>">
    <label for="Email"></label>
    <input type="text" placeholder="Enter Email" name="email" required value="<?php echo $email; ?>">
    <br>
    <label for="password_1"></label>
    <input type="password" placeholder="Enter Password" name="password_1" required>
    <br>
    <label for="password_2"></label>
    <input type="password" placeholder="Repeat Password" name="password_2" required><br>
    <label for "user_type"></label><br>
    <b>Gender:</b><br>
      <input type="radio" name="Gender" value="Male"><b>Male</b>
      <input type="radio" name="Gender" value="Female"><b>Female</b>
      <select placeholder="Select User Type" name="user_type" id="user_type" >
        	<option value="admin">Admin</option>
          <option value="user">User</option>
  		</select>
      <br>
    <p><b>By creating an account you agree to our</b> <a href="#"color:black","font-style:italic"><b>Terms & Privacy</b></a>.</p>
    <p>Already have an account?<a href="Login.php" target="_self"><b>Login</b></a></p>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="Signup">Create User</button>
    </div>
  </div>
</fieldset>
</center>
</form>
</body>
</html>
