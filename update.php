<?php
  require_once("database.php");

  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['email'];

	$sql = "UPDATE studenttbl SET username='$username', password='$password', name='$name', email='$email' WHERE username='$username' ";
  $query= mysqli_query($connection, $sql);

	echo "success";

?>
