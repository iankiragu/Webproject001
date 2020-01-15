<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGNUP</title>
      <link rel="stylesheet" href="body.css">
      <link rel="icon" type="image/png" href="img/device.png">
      <link rel="stylesheet" href="styles.css">
</head>
<body class="Sign">
<form action="Signup.php" method="post" style="border:"none">
  <?php include('errors.php'); ?>
  <div class="container">
      <fieldset style="border-radius: 0.25px;width:650px;background-color: white;padding: 15px 15px 15px 15px">
    <h1>Sign Up</h1>
    <h3>Kindly insert Details to create your new Account.</h3>
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
    Gender:<br>
      <input type="radio" name="Gender" value="Male"><b>Male</b>
      <input type="radio" name="Gender" value="Female"><b>Female</b>
    <p><b>By creating an account you agree to our</b> <a href="#"color:black","font-style:italic"><b>Terms & Privacy</b></a>.</p>
    <p>Already have an account?<a href="Login.php" target="_self"><b>Login</b></a></p>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button name="Signup" type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</fieldset>
</form>
</body>
</html>
