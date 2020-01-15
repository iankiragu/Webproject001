<?php
	include('server.php');
  if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: Login.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <link rel="stylesheet" href="body.css">
    <link rel="icon" type="image/png" href="img/device.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .bgimg-1 {
    background-image: url("viewpoint.jpg");
    min-height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg-3 {
    background-image: url("pidgeon.jpg");
    min-height: 100%;
}
.contact{
  background-image: url("pidgeon.jpg");
  min-height: 100%;
}

    </style>
      </head>
  <body>

  <ul>
        <li style="float:left"><a class="active" href="Homepage.php">Home</a></li>
        <li style="float:left"><a class="active" href="contact.php">Contact</a></li>
        <li style="float:left"><a class="active" href="Aboutus.php">About</a></li>

        <li style="float:right"><a class="active"href="Signup.php">Signup</a></li>
</ul>
<center>
<div id="content">
<div class="content">
  <!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
    <div class="error" class="success" >
      <h3>
        <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
        ?>
      </h3>
    </div>
  <?php endif ?>
  <!-- logged in user information -->
  <div class="profile_info">
    <img src="id.png"  >

    <div>
      <?php  if (isset($_SESSION['user'])) : ?>
        <strong><?php echo $_SESSION['user']['username']; ?></strong>

        <small>
          <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
          <br>
          <a href="Login.php?logout='1'" style="color: red;">logout</a>
      <?php endif ?>
    </div>
    </div>
  </div>
</div>
</center>



<div class="bgimg-1 " >
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">WELCOME TO <span class="w3-hide-small">ZEIS-LINE!</span>

  </div>
</div >

<!-- Container (Portfolio Section) -->

  <h1 class="w3-center">MY WORK</h1>
  <p class="w3-center"><em>Here are some of my work pieces<br> Select on images to enhance field of view</em></p><br>

<div class="bgimg-3 w3-display-container ">

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="kerj.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Beauty Beyond the frame">
    </div>

    <div class="w3-col m3">
      <img src="bmw 635d-2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Life on the Fast Lnae">
    </div>

    <div class="w3-col m3">
      <img src="boat1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Need an ark? I noah guy!">
    </div>

    <div class="w3-col m3">
      <img src="pidgeon.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Peace upon thou soul">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="fort2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="GOLF.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="I can transform you">
    </div>

    <div class="w3-col m3">
      <img src="matata1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Smile maybe?">
    </div>
    <div class="w3-col m3">
      <img src="miimi.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Contemplation">

    </div>
  </div>

  <!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
</div>
<!-- Container (Contact Section) -->

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="Homepage.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
	            <a href="https://twitter.com/TinasheMwaniki">
	                <i class="fa fa-twitter"></i>
	            </a>

	            <a href="https://www.instagram.com/_.kiragu._">
	                <i class="fa fa-instagram"></i>
	            </a>



</footer>
<script>
{
  myCenter=new google.maps.LatLng(-1.2921, 36.8219);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
