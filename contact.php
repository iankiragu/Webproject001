<?php include('upload.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Contact Us </title>
    <link rel="stylesheet" href="body.css">
    <link rel="icon" type="image/png" href="img/device.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body class="log">
    <ul>
      <li style="float:left"><a class="active" href="Homepage.php">Home</a></li>
        <li style="float:right"><a class="active"href="Login.php">Login</a></li>
      <li style="float:right"><a class="active"href="Signup.php">Signup</a></li>
    </ul>

    <div class="w3-content w3-container w3-padding-64" id="contact">
    <h3 class="w3-center">WHERE WE ARE SITUATED</h3>
      <p class="w3-center"><em>We would love your feedback!</em></p>
      <center>
  <fieldset style="border-radius: 0.25px;width:650px;background-color: white;padding: 5px 5px 3px 55px">

      <div class=" contact w3-row w3-padding-32 w3-section">
        <div class=" contact w3-col m4 w3-container">
          <!-- Add Google Maps -->
          <div id="googleMap" class="contact w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
        </div>
        <div class="w3-col m8 w3-panel">
          <div class="w3-large w3-margin-bottom">
            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Nairobi, Kenya<br>
            <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +2547123456<br>
            <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: zeisco@gmail.com<br>
          </div>
          <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
          <form action="/action_page.php" target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
              </div>
            </div>
            <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
            <button class="w3-button w3-black w3-right w3-section" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </form>
        </div>
      </div>
    </div>
</fieldset>
</center>
  </body>
</html>
