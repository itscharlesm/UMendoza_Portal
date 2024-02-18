<?php
  require_once("database.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CST5L - Charleslexcel B. Mendoza</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<div class="container">
  <br/>
<div class="row">
<div class="col-sm-4 offset-sm-4">
<div class="card">
  <form role="form">

<div class="card-header bg-warning text-light"> <h2 class="text-center"> SIGN-IN </h2> </div>
<div class="card-body">

    <div class="mb-3 mt-3">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>

    <div class="mb-3 mt-3">
        <label for="password">  Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>

</div>
  <div class="card-footer">
      <div class="d-grid gap-4 d-md-flex justify-content-md-center">
      <button type="button" class="btn btn-warning btn-lg" id="loginbtn" > LOGIN </button>
      <button type="button" class="btn btn-secondary btn-lg" id="cancelbtn" > CANCEL </button>
  </div>
      <p id="errors">

      </p>

      <div class="col-md-12 text-start">
      <a class="btn btn-warning btn-sm" href="start.php">GO BACK </a>
      </div>
      </div>
</div>
</div>
</form>
</div>
</div>
</div>

</body>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>

$(function(){

  $("#loginbtn").click(function(){
    var username = $("#username").val();
    var password = $("#password").val();

    if(username==""){
      isEmpty("username");
      return;
    }
    if(password==""){
      isEmpty("password");
      return;
    }

    checkLogin(username, password)

  });

  function checkLogin(username, password){

    var values = {
      "username": username,
      "password": password
    };

    $.ajax({
      type: "POST",
      url: "adminlogin.php",
      data: values,
      cache: false,
      success: function(data){
        if(data=="success")
        gotoNewPage()
        //alertDialog("success","Congratulation","You successfully login your account!");

        if(data=="invalid")
        alertDialog("error","Error", "Your login credentials are incorrect");

      }

    });

    function gotoNewPage(){

    let timerInterval
    Swal.fire({
    icon: 'success',
    title: 'Congratulations! You successfully login your account!',
    html: 'Redirecting you to main page in <b></b> milliseconds.',
    timer: 1500,
    timerProgressBar: true,
    allowEscapeKey: true,
    allowOutsideClick: true,
    didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
    b.textContent = Swal.getTimerLeft()
    }, 100)
    },
    willClose: () => {
    clearInterval(timerInterval)
    }
    }).then((result) => {
    /* Read more about handling dismissals below */
    if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
    location.href = 'admin_dashboard.php';
    }
    })

    }
    function alertDialog(icon,title,content){
    Swal.fire(
    title,
    content,
    icon
    )
    }

  }

  function isEmpty(input){
    Swal.fire(
    'Error', //title
    'Please enter your ' + input, //content
    'error' //logo/icon
    )
  }

  $("#cancelbtn").click(function(){
    $("#username").val("");
    $("#password").val("");
  });


});

</script>
</html>
