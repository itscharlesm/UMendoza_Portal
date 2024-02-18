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
<div class="col-sm-8 offset-sm-2">
<div class="card">

<div class="card-header bg-success text-light"> <h2 class="text-center"> Welcome to UMendoza! </h2> </div>
<div class="card-body">

  <img src="logo.jpg" alt="Cinque Terre" class="mx-auto d-block rounded">


  <div class="mb-4 mt-4 text-center">
      <label> <b> Are you a? </b> </label>
    </div>

  <div class="col-md-12 text-center">
    <div class="d-grid gap-4 d-md-flex justify-content-md-center">
    <button type="button" class="btn btn-primary btn-lg" id="guestbtn" > GUEST </button>
    <button type="button" class="btn btn-danger btn-lg" id="studentbtn" > STUDENT </button>
    <button type="button" class="btn btn-warning btn-lg" id="adminbtn" > ADMIN </button>
  </div>



</form>
</body>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>

$(function(){

  $("#guestbtn").click (function(){
     gotoGuest();
   });

   $("#studentbtn").click (function(){
      gotoStudent();
    });

    $("#adminbtn").click (function(){
       gotoAdmin();
     });


  function gotoGuest(){

  let timerInterval
  Swal.fire({
  icon: 'success',
  title: 'WELCOME GUEST',
  html: 'Redirecting you to guest page in <b></b> milliseconds.',
  timer: 2000,
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
  location.href = 'guest_dashboard.php';
  }
  })

  }

  function gotoStudent(){

  let timerInterval
  Swal.fire({
  icon: 'success',
  title: 'CONFIRM YOU ARE A STUDENT',
  html: 'Redirecting you to student login page in <b></b> milliseconds.',
  timer: 2000,
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
  location.href = 'student_login.php';
  }
  })

  }

  function gotoAdmin(){

  let timerInterval
  Swal.fire({
  icon: 'success',
  title: 'CONFIRM YOU ARE AN ADMIN',
  html: 'Redirecting you to admin login page in <b></b> milliseconds.',
  timer: 2000,
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
  location.href = 'admin_login.php';
  }
  })

  }

});

</script>
</html>
