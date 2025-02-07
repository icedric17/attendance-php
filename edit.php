<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM attendance WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Todo App</title>
  <link href="statics/css/bootstrap.min.css" rel="stylesheet">
  <script src="statics/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6">
            <div class="row">
                <p class="display-5 fw-bold">Edit Attendance</p>
            </div>
            <div class="row">
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="my-3">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" value="<?= $row['name'] ?>" required>
                    </div>
                    <div class="my-3">
                        <label>Program Course</label>
                        <input class="form-control" type="text" name="program_course" value="<?= $row['program_course'] ?>" required>
                    </div>
                    <div class="my-3">
                        <label>Student Code</label>
                        <input class="form-control" type="text" name="student_code" value="<?= $row['student_code'] ?>" required>
                    </div>   
                    <label>Status</label>
                    <select name="status" class="form-select" <i class="fa-solid fa-floppy-disk"></i>>
                        <option <?= $row['status'] == 'Present' ? 'selected' : '' ?>>Present</option>
                        <option <?= $row['status'] == 'Absent' ? 'selected' : '' ?>>Absent</option>
                        <option <?= $row['status'] == 'Late' ? 'selected' : '' ?>>Late</option>
                        <option <?= $row['status'] == 'Excused' ? 'selected' : '' ?>>Excused</option>
                    </select>
                    <div class="my-3">
                        <button type="submit" class="btn btn-outline-dark" >Update&nbsp;<i class="fa-solid fa-floppy-disk"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

