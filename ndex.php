<?php
	include('server.php');
  if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: Login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="body.css">
  <link rel="icon" type="image/png" href="img/device.png">
 	<script src="dukeuploads.js"></script>
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
</head>
<body class="log">
	<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
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
		<div class="profile_info div">
			<img src="id.png"  >
      	<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>

					<button type="button" name="button">	<a class="fontsizelog" href="Home.php?logout='1'" style="color: red;">logout</a></button>
					</small>
				<?php endif ?>
			</div>
		</div>
	</div>
	<form method="POST" action="Home.php" enctype="multipart/form-data">
		<?php include('fileupload.php')?>
	 <input type="hidden" name="size" value="1000000">
	 <div>
		 <input type="file" name="image">
	 </div>
	 <div>
		 <textarea
			 id="text"
			 cols="40"
			 rows="4"
			 name="image_text"
			 placeholder="Say something about this image..."></textarea>
	 </div>
	 <div class="container">
	     <h1>Upload and Display Image</h1>

	     <canvas id="can1">
	     </canvas>

	     <p>
	         <input type="file" id="finput1" multiple="false" accept="image/*" onchange="upload()">
	     </p>
	 </div>
		 <button type="submit" name="upload">POST</button>
	 </div>
 </form>
</body>
</html>
