<?php
  require_once("database.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> CST5L - Charleslexcel B. Mendoza </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="shortcut icon" type="image/x-icon" href="images/titlelogo.png"/>
  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

      <link rel="preconnect" href="https://fonts.googleapis.com">
  		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>

      <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous"></script>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  		<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<div class="container">

  <br>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header bg-warning text-white">
  <h1 class = "text-center"> <br> Welcome to Student Accounts Record System </h1>
<h2 class = "text-center text-dark"> <u> FOR ADMINS </u> </h2>

</div>

<div class="card-body">

<table id="studentrectbl" class="table table-hover">
<thead>
<tr>
<th> ID </th>
<th> NAME </th>
<th> USERNAME </th>
<th> PASSWORD </th>
<th> EMAIL</th>
<th> ACTIONS</th>
</tr>


</thead>

<tbody>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-warning btn-sm" id="addbtn" data-bs-toggle="modal" data-bs-target="#add">ADD STUDENT ACCOUNT  <i class="fa-solid fa-plus"></i> </button>

  <br>
  <br>
<?php
$sql = "SELECT * FROM studenttbl";
$query = mysqli_query($connection, $sql);
$count = mysqli_num_rows($query);
while( $row = mysqli_fetch_assoc($query) ){

$id = $row['id'];
$name = $row['name'];
$username = $row['username'];
$password = $row['password'];
$email = $row['email'];

?>



<tr>

  <td> <?php echo $id;  ?> </td>
  <td> <?php echo $name;  ?> </td>
  <td> <?php echo $username;  ?> </td>
  <td> <?php echo $password;  ?> </td>
  <td> <?php echo $email;  ?> </td>
  <td>

     <div class="dropdown">
    <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      OPTIONS
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" data-bs-toggle="modal" id="editbtn" data-bs-target="#edit"
                          data-editid="<?php echo $id; ?>"
                          data-editname="<?php echo $name; ?>"
										    	data-editusername="<?php echo $username; ?>"
                          data-editpassword="<?php echo $password; ?>"
										    	data-editemail="<?php echo $email; ?>">Edit</a>
										    </li>

      <li> <a class="dropdown-item" id="deletebtn" data-name="<?php echo $name; ?>"> Delete </a> </li>
      <li><a class="dropdown-item" data-bs-toggle="modal" id="viewbtn" data-bs-target="#view"
                          data-id="<?php echo $id; ?>"
                          data-name="<?php echo $name; ?>"
										    	data-username="<?php echo $username; ?>"
                          data-password="<?php echo $password; ?>"
										    	data-email="<?php echo $email; ?>">
										    	View</a>
											</li>
    </ul>
  </div>

  </td>

</tr>
<?php

}
?>


</tbody>
</table>
</div>

<div class="col-md-12 text-start">
  <a class="btn btn-warning btn-sm" href="start.php">GO BACK </a>
  <a class="btn btn-warning btn-start btn-sm" href="register.php">CREATE NEW ADMIN ACCOUNT </a>
</div>



</div>
</div>
</div>
</div>
        <!-- The Modal (ADD) -->
        <div class="modal fade" id="add">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">Add Student Account  </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <div class="row">
        <div class="col-sm-4">
        <span>Username:</span>
        </div>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="id" id="addUsername" >
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-4">
        <span>Password:</span>
        </div>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="name" id="addPassword">
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-4">
        <span>Name:</span>
        </div>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="name" id="addName">
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-4">
        <span>Email:</span>
        </div>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="name" id="addEmail">
        </div>
        </div>
        <hr>
        </div>
        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <div class="d-grid gap-2 d-md-flex justify-content-center">
        <button type="button" class="btn btn-warning"  name="savebtn" id="savebtn">SAVE <i class="fa-solid fa-floppy-disk"></i></button>
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">CANCEL <i class="fa-solid fa-xmark"></i></button>
        </div>
        </div>

        </div>
        </div>
        </div>

        <!-- View Modal -->
        <div class="modal fade" id="view">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <!-- Modal Header -->
        <form>
        <div class="modal-header">
        <h4 class="modal-title fw-bold">Student Account Details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <div class="row mx-3">
        <div class="col-sm">
        <p>Student Username:</p>
        </div>
        <div class="col-sm">
        <p><b id="info-username"></b></p>
        </div>
        <hr>
        </div>
        <div class="row mx-3">
        <div class="col-sm">
        <p>Student Password:</p>
        </div>
        <div class="col-sm">
        <p><b id="info-password"></b></p>
        </div>
        <hr>
        </div>
        <div class="row mx-3">
        <div class="col-sm">
        <p>Student Name:</p>
        </div>
        <div class="col-sm">
        <p><b id="info-name"></b></p>
        </div>
        <hr>
        </div>
        <div class="row mx-3">
        <div class="col-sm">
        <p>Student Email:</p>
        </div>
        <div class="col-sm">
        <p><b id="info-email"></b></p>
        </div>
        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-warning" data-bs-dismiss="modal">
        CLOSE <i class="fa-solid fa-xmark"></i>
        </button>
        </div>
        </form>
        </div>
        </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="edit">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <!-- Modal Header -->
        <form>
        <div class="modal-header">
        <h4 class="modal-title fw-bold">Edit Student Account</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <div class="row mx-3">
        <div class="col-sm-4">
        	<label for="name" class="form-label">Student Username:</label>
        </div>
        <div class="col-sm">
        	<input type="text" class="form-control mb-2" name="username" id="editusername">
        </div>
        <hr>
        </div>
        <div class="row mx-3">
        <div class="col-sm-4">
        	<label for="name" class="form-label">Student Password:</label>
        </div>
        <div class="col-sm">
        	<input type="text" class="form-control mb-2" name="password" id="editpassword">
        </div>
        <hr>
        </div>
        <div class="row mx-3">
        <div class="col-sm-4">
        <label for="name" class="form-label">Student Name:</label>
        </div>
        <div class="col-sm">
        <input type="text" class="form-control mb-2" name="name" id="editname">
        </div>
        <hr>
        </div>
        <div class="row mx-3">
        <div class="col-sm-4">
        <label for="name" class="form-label">Student Email:</label>
        </div>
        <div class="col-sm">
        <input type="text" class="form-control mb-2" name="email" id="editemail">
        </div>
        </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" id="updatebtn" class="btn btn-sm btn-warning">UPDATE <i class="fa-solid fa-floppy-disk"></i></button>
        <button type="button" class="btn btn-sm btn-warning" data-bs-dismiss="modal">
        CANCEL <i class="fa-solid fa-xmark"></i>
        </button>
        </div>
        </form>
        </div>
        </div>
        </div>



</body>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>

$(function(){

  $("#studentrectbl").DataTable({
    "responsive":true,
    "autoWidth":true
  });

  $(document).on('click', '#editbtn', function(){
  				var username = $(this).data('editusername');
  				var password = $(this).data('editpassword');
  				var name = $(this).data('editname');
          var email = $(this).data('editemail');

  				$("#editusername").val(username);
  				$("#editpassword").val(password);
  				$("#editname").val(name);
          $("#editemail").val(email);

  			});

  			$(document).on('click', '#updatebtn', function(){

  				var id = $("#editid").val();
  				var username = $("#editusername").val();
  				var password = $("#editpassword").val();
  				var name = $("#editname").val();
          var email = $("#editemail").val();

  				Swal.fire({
  					title: 'Are you sure you want to update this student?',
  					text: "This will not undo changes in the database",
  					icon: 'question',
  					showCancelButton: true,
  				 confirmButtonText: 'OK'
  				}).then((result) => {
  					if (result.isConfirmed) {

  						updatestudents(id, username, password, name, email);

  					}
  				})

  			});


  $(document).on('click', '#viewbtn', function(){
  				var username = $(this).data('username');
  				var password = $(this).data('password');
  				var name = $(this).data('name');
          var email = $(this).data('email');

  				$("#info-username").text(username);
  				$("#info-password").text(password);
  				$("#info-name").text(name);
          $("#info-email").text(email);

  			});


  $(document).on('click', '#deletebtn', function(){
  var name = $(this).data('name');

  Swal.fire({
  title: 'Are you sure you want to delete this student, ' + name + '?',
  text: "Deleting this will not undo changes!",
  icon: 'question',
  showCancelButton: true,
  }).then((result) => {
  if (result.isConfirmed) {
      deleteStudents(name);

  }

  });
  });

  function deleteStudents(name){
    var values = {
      "name": name
    };

  $.ajax({
  type: "POST",
  url: "delete.php",
  data: values,
  cache: false,
  success: function(data){
    if(data=="success"){
      showDeletedSuccess();
    }
  }


  });


}

    function updatestudents(id, username, password, name, email){
      var values = {
        "id": id,
        "username": username,
        "password": password,
        "name": name,
        "email": email,
      };

      $.ajax({
        type: "POST",
        url: "update.php",
        data: values,
        cache: false,
        success: function(data){
          if(data=="success"){
            Swal.fire({
              icon: 'success',
              title: 'Updated!',
              text: 'Existing student updated',
              confirmButtonText: 'CONTINUE',
              allowOutsideClick: false,
              allowEscapeKey: false
            }).then((result) => {
              if (result.isConfirmed) {
                location.reload(true);
              }
            })
          }
        }
      });
    }

  function showDeletedSuccess(){
  Swal.fire({
  icon: 'success',
  title: 'Deleted',
  text: 'Student deleted!',
  confirmButtonText: 'CONTINUE',
  allowEscapeKey: false,
  allowOutsideClick: false,
  }).then((result) => {

  if(result.isConfirmed) {

  location.reload(true);
  }
  })
  }

  $(document).on('click', '#savebtn', function() {
           var username = $("#addUsername").val();
           var password = $("#addPassword").val();
           var name = $("#addName").val();
           var email = $("#addEmail").val();

           if (username=="") {
             alertDialog("Empty Fields", "Please Enter Username", "error");
             return;
           }else if (password=="") {
             alertDialog("Empty Fields", "Please Enter Password", "error");
             return;
           }else if (name=="") {
             alertDialog("Empty Fields", "Please Enter Name", "error");
             return;
           }else if (email=="") {
             alertDialog("Empty Fields", "Please Enter Email", "error");
             return;
           }else {
             Swal.fire({
               title: 'Are you sure you want to add this student?',
               text: "This will add new entry in the database",
               icon: 'question', //question, error, , success, info
               showCancelButton: true,
               confirmButtonText: 'OK'
             }).then((result) => {
               if (result.isConfirmed) {
                  addstudents(username, password, name, email);
               }
             });
           }

         });

         function addstudents(username, password, name, email){
           var values= {
             "username": username,
             "password": password,
             "name": name,
             "email": email

           };
           $.ajax({
             type: "POST",
             url: "add.php",
             data: values,
             cache:  false,
             success: function(data){
               if(data=="success"){
                gotoPageNormal();

               }else if(data=="already exists"){
                 alertDialog("Error", "The student already exists! Please try again!", "error");
               }
             }
           });

         }

   function gotoPageNormal(){
           Swal.fire({
             icon: 'success',
             title: 'Success',
             text: 'New Student Account Added',
             confirmButtonText: 'Continue',
             allowEscapeKey: false,
             allowOutsideClick: false,
           }).then((result) => {
             if(result.isConfirmed){
               location.href = 'admin_dashboard.php';
             }
           });
         }
         function alertDialog(title, content, icon){
           Swal.fire(
             title,
             content,
             icon
           );
         }

});

</script>
</html>
