<?php
session_start();
include 'config.php';

$eid = $_GET['id'];

$sql = "SELECT * FROM `employee` WHERE `eid` = '$eid'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$name = $row['Ename'];
$address = $row['Eaddress'];
$salary = $row['salary'];
$position = $row['Eposition'];

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Ename = $_POST['Ename'];
    $Eaddress = $_POST['Eaddress'];
    $salary = $_POST['salary'];
    $Eposition = $_POST['Eposition'];

    // Validate the form inputs
    if (empty($Ename)) {
        $errors[] = "Name is required";
    }

    if (empty($Eaddress)) {
        $errors[] = "Address is required";
    }

    if (empty($salary)) {
        $errors[] = "Salary is required";
    }

    if (empty($Eposition)) {
        $errors[] = "Position is required";
    }

    // If there are no errors, update the employee record
    if (empty($errors)) {
        $sql = "UPDATE `employee` SET Ename='$Ename', Eaddress='$Eaddress', salary='$salary', Eposition='$Eposition' WHERE eid='$eid'";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record updated successfully')</script>";
            header("Location:../php/employeedetails.php");
            exit;
        } else {
            $errors[] = "Error updating record: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/editemployeestyle.css">
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    
    <?php if (!empty($errors)) : ?>
        <div class="error">
            <?php foreach ($errors as $error) : ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    
    <form method="POST" action="editemployee.php">
        <div>
            <label>ID:</label>
            <input type="text" id="eid" name="eid" value="<?php echo $eid; ?>" readonly><br>
            <label for="name">Name:</label>
            <input type="text" id="Ename" name="Ename" value="<?php echo $name; ?>" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="Eaddress" name="Eaddress" value="<?php echo $address; ?>" required>
        </div>
        <div>
            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" value="<?php echo $salary; ?>" required>
        </div>
        <div>
            <label for="position">Position:</label>
            <input type="text" id="Eposition" name="Eposition" value="<?php echo $position; ?>" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Update">
        </div>
    </form>
</body>
</html>
