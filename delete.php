<?php
require_once('database.php');
session_start();

$name = $_POST['name'];

$sql = "DELETE FROM studenttbl WHERE name='$name'";
$query = mysqli_query($connection, $sql);

echo "success";

 ?>
