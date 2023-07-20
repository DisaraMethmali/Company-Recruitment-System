<?php
session_start();
include 'config.php';


        $applicant_id = $_GET['id'];
//execute the query
        $sql = "SELECT * FROM `applicant` WHERE `applicant_id` = '$applicant_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        //connecting the datase
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $address = $row['address'];
        $country = $row['country'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $contact_no = $row['contact_no']; 
        $email = $row['email'];
        $password = $row['password']; 

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/editstyle.css">
    <script src="script.js"></script>
    <title>Registration Page</title>
</head>

<body>
<div class="container">
                
                <form action="updateDetails.php" method="POST">
                <h2>Edit Applicant Details</h2>
                <br>
                Applicant ID:
            <input type="text" id="applicant_id" name="applicant_id" value="<?php echo $applicant_id; ?>" readonly><br>
            <br>
            First Name:
            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>"><br>
            <br>
            Last Name:
            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>"><br><br>
           Address:
            <input type="text" id="address" name="address" value="<?php echo $address; ?>"><br><br>
           Country:
            <input type="text" id="country" name="country" value="<?php echo $country; ?>"><br><br>
            Gender:
            <input type="text" id="gender" name="gender" value="<?php echo $gender; ?>"><br><br>
            Date of Birth:
            <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>"><br><br>
          Phone Number:
            <input type="text" id="contact_no" name="contact_no" value="<?php echo $contact_no; ?>"><br><br>
            Email:
            <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
            Password:
            <input type="password" id="password" name="password" value="<?php echo $password; ?>"><br><br><br>
            <center><input type="submit" value="Update" id="submitBtn"></center>
                </form>
            </div>
</body>
