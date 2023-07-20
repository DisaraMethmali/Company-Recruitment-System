<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Ename = $_POST['Ename'];
    $Eaddress = $_POST['Eaddress'];
    $salary = $_POST['salary'];
    $Eposition = $_POST['Eposition'];

    $sql = "INSERT INTO `employee` (Ename, Eaddress, salary, Eposition) VALUES ('$Ename', '$Eaddress', '$salary', '$Eposition')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record inserted successfully')</script>";
        header("Location: ../php/system.php");
        exit;
    } else {
        echo "<script>alert('Error')</script>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="../css/addemployee.css">
</head>
<body>
    <h1>Add Employee</h1>
    <br>
    <form method="POST" action="">
        <div class="d1">
            <label for="Ename">Name:</label>
            <input type="text" id="Ename" name="Ename" required>
        </div>
        <br>
        <div class="d1">
            <label for="Eaddress">Address:</label>
            <input type="text" id="Eaddress" name="Eaddress" required>
        </div>
        <br>
        <div class="d1">
            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" required>
        </div>
        <br>
        <div class="d1">
            <label for="Eposition">Position:</label>
            <input type="text" id="Eposition" name="Eposition" required>
        </div>
        <br>
        <div class="d2">
            <input type="submit" name="submit" value="Add" class="btn1">&nbsp;&nbsp;
            <a href="hr_page.php">Cancel</a>
        </div>
    </form>
    <br><br><br><br><br><br><br>
</body>
</html>