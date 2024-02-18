<?php
  require_once("database.php");

  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  checkExist($username, $password, $name, $email, $connection);


  function checkExist($username, $password, $name, $email, $connection) {
    $sql = "SELECT * FROM studenttbl WHERE username='$username' ";
    $query = mysqli_query($connection,$sql);
    $exist = mysqli_num_rows($query);

    if($exist>0) {
    echo "already exists";

    }else {
    insertData($username, $password, $name, $email, $connection);
    echo "success";
    }

  }

    function insertData($username, $password, $name, $email, $connection) {
      $sql = "INSERT INTO studenttbl(username, password, name, email) VALUES ('$username', '$password', '$name' ,'$email')";
      $query = mysqli_query($connection,$sql);
    }
