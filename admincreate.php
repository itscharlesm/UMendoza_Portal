<?php
require_once('database.php');
session_start();


$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
checkExist($name, $username, $password, $email, $connection);



function checkExist($name, $username, $password, $email, $connection){

$sql = "SELECT * FROM admintbl WHERE  username = '$username' OR name = '$name'";
  $query = mysqli_query($connection,$sql);




  $exist = mysqli_num_rows($query);

  if($exist>0){
    $_SESSION['error'] = "This account is already exist!";

    header ("location: register.php");

  }else {
    insertData($name, $username, $password, $email, $connection);
    $_SESSION['error'] = "";
    unset($_SESSION['error']);
    header ("location: admin_dashboard.php");

  }
}



function insertData($name,$username, $password, $email, $connection){
  $sql = "INSERT INTO admintbl (username, password, name, email) VALUES
  ('$username','$password', '$name', '$email')";
  $query = mysqli_query($connection,$sql);
}
 ?>
