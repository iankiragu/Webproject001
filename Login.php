<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="body.css">
    <link rel="icon" type="image/png" href="img/device.png">
    <link rel="stylesheet" href="styles.css">
  </head>
    <body class="log">
  <form action="Login.php" method="post"  style="border:"none">
    	<?php include('errors.php'); ?>  <div class="container">
      <form class="login">
        <br>
        <br>
        <br>
      <center>
      <fieldset style="border-radius: 0.25px;width:700px;background-color: white;padding: 15px 15px 15px 15px">
      <center>
    <h1><b><u>LOGIN</b></u></h1>
    <p>Kindly Key-in The Following Details Access your Existing Account</p>
    <hr>
    <label for="username"></label>
    <br>
    <input type="text" placeholder="username" name="username" required>
    <br>
    <label for="password"></label>
    <input type="password" placeholder=" Password" name="password" required>
    <br>
    <p>Don't have an account?<a href="Createuser.php" target="_self"><b>Sign up</b></a></p>
    <div class="clearfix">
      <button type="submit" name="LOGIN" class="loginbtn">LOGIN</button>
      </div>
      </center>
      </fieldset>
      </center>
      </form>
  </body>
</html>
