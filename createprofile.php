<?php
session_start();
?>

<?php
include 'config.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Profile</title>
    <link rel="stylesheet" href="../css/createprofile.css">
    
</head>
<body>
    <div class="container">
        <h1>Create Profile Form</h1>
        <br>
        <form method="POST" action="createprofile.php">

            <div class="d1">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            </div>
            <br>
            <div class="d1">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            </div>
            <br>
            <div class="d1">
            <label for="job_vacancy">Job Vacancy wish to apply:</label>
            <input type="text" name="job_vacancy" required>
            </div>
            <br><br>
              
              
            </select>

            <input type="submit" value="Submit" class="btn1">
           
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $jobVacancy = $_POST['job_vacancy'];

        $sql = "INSERT INTO proflies (p_id, name, email, job_vacancy) VALUES ('', '$name', '$email', '$jobVacancy')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Profile created successfully')</script>";
            header("Location: createprofilepage.php");
            exit;
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
        }

        mysqli_close($conn);
    }
    ?>

</body>
</html