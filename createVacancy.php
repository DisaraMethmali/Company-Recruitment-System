<?php
session_start();// Start the session

include_once 'config.php';// Include the config file



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $image=$_POST['image'];
    $position = $_POST['position'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    
    // Prepare the SQL query
    $sql = "INSERT INTO about (image,Id,position, description, status)
            VALUES ('$image','','$position', '$description',  '$status'
        )";
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Vacancy created successfully.";
        header("Location: hr_page.php");// Redirect the user to the HR page after creating the vacancy
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/create.css">
    <title>Vacancy</title>
</head>
<body>
    <div class="Containervacancy">
        <form id="vacancy" method="post" >
            <h2>New Vacancy</h2>

            <label>  </label><br>
            <input type="file" name="image">
            <br>
            <label>Position Name:</label><br>
            <input type="text" name="position" class="vacant">
            <br><br>
            <label>Description:</label><br>
            <textarea id="description" name="description" rows="10" cols="60"></textarea>
            <br><br>
            <label for="status">Status:</label><br>
            <input type="text" id="status" name="status" required>
            <br><br>
            
            <center><button type="submit">Create Vacancy</button></center>
        </form>
    </div>
</body>
</html>





