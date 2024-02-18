<?php
  require_once("database.php");
 ?>

<!DOCTYPE html>
<title> Charleslexcel B. Mendoza - CST5L </title>

<head>
  <link rel="stylesheet" href="student_dashboard.css">
  <title>CST5L - Charleslexcel B. Mendoza</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="card-header bg-danger text-light"> <h2 class="text-center"> UMENDOZA </h2> </div>
<div class="card-body">

<body>
  <?php
  $sql = "SELECT * FROM studenttbl";
  $query = mysqli_query($connection, $sql);
  $result = mysqli_fetch_assoc($query);
  ?>

<div class="container mt-5">

    <div class="row d-flex justify-content-center">

        <div class="col-md-7">

            <div class="card p-3 py-4">

                <div class="text-center">
                    <img src="profile.jpg" width="100" class="rounded-circle">
                </div>

                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">STUDENT</span>
                    <h5 class="mt-2 mb-0"><?php echo $result['username']; ?></h5>
                    <span><?php echo $result['name']; ?></span>

                    <div class="px-4 mt-1">
                        <p class="fonts"><?php echo $result['email']; ?></p>

                    </div>


                    <div class="buttons">
                        <a class="btn btn-danger btn-sm" href="start.php">GO BACK </a>
                        <a class="btn btn-danger btn-sm" href="start.php">CONTACT </a>
                    </div>


                </div>




            </div>

        </div>

    </div>

</div>

</body>
