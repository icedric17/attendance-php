<?php
include 'db.php';
$sql = "SELECT * FROM attendance ORDER BY attendance_date DESC";
$result = $conn->query($sql);
?>

<div class="row border rounded p-3 my-3">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Program Course</th>
                <th>Student Code</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['program_course'] ?></td>
                    <td><?= $row['student_code'] ?></td>
                    <td><?= $row['attendance_date'] ?></td>
                    <td>
                        <span class="badge 
                            <?= $row['status'] == 'Present' ? 'bg-success' : 
                                ($row['status'] == 'Absent' ? 'bg-danger' : 
                                ($row['status'] == 'Late' ? 'bg-warning' : 'bg-info')) ?>">
                            <?= $row['status'] ?>
                        </span>
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
