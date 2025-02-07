<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $program_course = $_POST['program_course'];
    $student_code = $_POST['student_code'];
    $status = $_POST['status'];

    $sql = "INSERT INTO attendance (name, program_course, student_code, status) 
            VALUES ('$name', '$program_course', '$student_code', '$status')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect to homepage
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
