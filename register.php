<?php
  require_once("database.php");
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CST5L - Charleslexcel B. Mendoza</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container">
  <br/>
<div class="row">
<div class="col-sm-4 offset-sm-4">
<div class="card">
  <form action="admincreate.php" method="post">
<div class="card-header bg-warning text-light"> <h2 class="text-center"> REGISTER </h2> </div>
<div class="card-body">

  <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
  </div>

  <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email" required>
  </div>

    <div class="mb-3 mt-3">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
    </div>

    <div class="mb-3 mt-3">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
    </div>

</div>
  <div class="card-footer">
      <div class="gap-4 d-md-flex justify-content-md-center">
      <input class="btn btn-warning btn-lg" type="submit" name="register" id="register" value="CREATE"/>
      <input class="btn btn-secondary btn-lg" type="reset" name="cancel" id="cancel" value="CANCEL"/>
      </div>

      <?php
      if(isset($_SESSION['error'])){
          echo "<hr/><p> Errors: ". $_SESSION['error']. "</p>";
        }
       ?>

      <br/>
      <div class="col-md-12 text-center">
      <a class="btn btn-warning btn-sm"href="admin_dashboard.php">GO BACK</a>
      </div>
    </div>
</div>
</form>
</div>
</div>
</div>

</body>
</html>
