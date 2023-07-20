<?php
include_once'config.php';
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$applicant_id = $_POST['applicant_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "UPDATE `applicant` SET `first_name`='$first_name', `last_name`='$last_name', `address`='$address', `country`='$country', `gender`='$gender', `dob`='$dob', `contact_no`='$contact_no', `email`='$email', `password`='$password' WHERE `applicant_id`='$applicant_id'";

if (mysqli_query($conn,$sql))
{
    echo"<script>alert('Record inserted suceesfully')</script>";
    header("Location:../php/admin_page.php");
    
}
else{
    echo"<script>alert('Error')</script>";
}

mysqli_close($conn);

}
?>
