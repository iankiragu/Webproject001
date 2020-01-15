<?php
$connect = mysqli_connect("localhost", "root", "", "registration");
mysqli_query($connect,"INSERT INTO contacts (email, message) VALUES('$_POST[post_email]', '$_POST[post_message]');");
$connect->close();
header("Location: Homepage.php");
?>
