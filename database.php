<?php

$servername="localhost";
$username="root";
$password="";
$databasename="umendozaportaldb";


$connection = mysqli_connect($servername, $username, $password, $databasename);

if(!$connection)
  die("Can't connect to database ". mysqli_connect_error());



  //echo "Successfully connected to database: " . $databasename;

?>
