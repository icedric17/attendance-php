<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $program_course = $_POST['program_course'];
    $student_code = $_POST['student_code'];
    $status = $_POST['status'];

    $sql = "UPDATE attendance SET name='$name', program_course='$program_course', student_code='$student_code', status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
