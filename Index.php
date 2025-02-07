<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Attendance App </title>
  <link href="statics/css/bootstrap.min.css" rel="stylesheet">
  <script src="statics/js/bootstrap.js"></script>
  <script src="statics/js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6">
            <div class="row">
                <p class="display-5 fw-bold">Attendance App</p>
            </div>
            <div class="row">
                <a href="add.php" class="btn btn-outline-dark btn-sm">Add Todo&nbsp;<i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="row d-flex justify-content-center mt-1">
                <?php include 'read.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>
