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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="body.css">
  <link rel="icon" type="image/png" href="img/device.png">
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>
<body class="log">
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
		<div class="profile_info div">
			<img src="id.png"  >
      	<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<?php echo $_SESSION['user']['username']; ?>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>

					<a href="Login.php?logout='1'" style="color: red;">logout</a>
					</small>
				<?php endif ?>
			</div>
			</div>
		</div>
</div>


</div>
</body>
</html>
