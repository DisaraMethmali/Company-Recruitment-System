<?php
include_once'config.php';// Include the config file
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
        $image=$_POST['image'];
        $position = $_POST['position'];
        $description = $_POST['description'];
        $status = $_POST['status'];
// Prepare the SQL query
$sql = "UPDATE `about`  SET image='$image', position='$position', description='$description', status='$status' ";
// Execute the SQL query
if (mysqli_query($conn,$sql))
{
    echo"<script>alert('Record inserted suceesfully')</script>";
    header("Location:hr_page.php");// Switch to the HR page
    
}
else{
    echo"<script>alert('Error')</script>";
}

mysqli_close($conn);// Close the database connection

}
?>
