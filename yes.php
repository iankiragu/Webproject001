<?php
include('server.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: Login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="body.css">
	<link rel="icon" type="image/png" href="img/device.png">
	<link rel="stylesheet" href="styles.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body  class="log">
	<div class="header">
		<h2>ADMINISTRATOR</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
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
						<a href="yes.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="Signup.php">  CREATE A USER</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
