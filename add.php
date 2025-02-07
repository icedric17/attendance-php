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
                <p class="display-5 fw-bold">Enlist Attendance</p>
            </div>
            <div class="row">
                <form action="create.php" method="post">
                    <div class="my-3">
                        <input class="form-control" type="text" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="my-3">
                        <input class="form-control" type="text" name="program_course" placeholder="Enter Course" required>
                    </div>
                    <div class="my-3">
                        <input class="form-control" type="text" name="student_code" placeholder="Enter Code" required>
                    </div>
                    <select name="status" class="form-select" <i class="fa-solid fa-floppy-disk"></i>>
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                        <option value="Late">Late</option>
                        <option value="Excused">Excused</option>
                    </select>
                    <div class="my-3">
                        <button type="submit" class="btn btn-outline-dark">Enlist&nbsp;<i class="fa-solid fa-plus"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
