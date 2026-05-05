<?php
require_once 'classes/Student.php';

$students = [
    new Student("Alice Johnson", 20, 85.5),
    new Student("Bob Smith", 22, 72.0),
    new Student("Charlie Brown", 19, 49.5),
    new Student("Diana Prince", 21, 90.0),  
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <style>
        body { font-family: Arial; padding: 30px; background: #f4f4f4; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th { background: #4CAF50; color: white; padding: 10px; }
        td { padding: 10px; border-bottom: 1px solid #ddd; text-align: center; }
        tr:hover { background: #f1f1f1; }
        .admis     { color: green; font-weight: bold; }
        .non-admis { color: red; font-weight: bold; }
    </style>
</head>
<body>  
    <h1>Student Grades</h1>
    <table>
        <tr>
            <th>Full Name</th>
            <th>Age</th>
            <th>Score</th>
            <th>Grade</th>
            <th>Status</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= htmlspecialchars($student->getfullName()) ?></td>
            <td><?= $student->getAge() ?></td>
            <td><?= $student->getScore() ?></td>
            <td><?= $student->getGrade() ?></td>
            <td class="<?= $student->getStatus() === 'Admis' ? 'admis' : 'non-admis' ?>">
                <?= $student->getStatus() ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>