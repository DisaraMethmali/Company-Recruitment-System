<?php
session_start();
include 'config.php';

if (isset($_GET['id'])) {
    $applicantID = $_GET['id'];

    $query = "SELECT * FROM `applicant` WHERE `applicant_id` = '$applicantID'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $applicantData = mysqli_fetch_assoc($result);

   

?>
 <!DOCTYPE html>
        <html>
        <head>
            
            <link rel="stylesheet" href="../css/viewDetailsstyle.css">
            <title>View Applicant Details</title>
        </head>
        <body>
            <div class="container">
            
                <h2>Applicant Details</h2>
                <table id="tba">
                    <tr>
                        <th>Applicant ID:</th>
                        <td><?php echo $applicantData['applicant_id']; ?></td>
                    </tr>
                    <tr>
                        <th>First Name:</th>
                        <td><?php echo $applicantData['first_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><?php echo $applicantData['last_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td><?php echo $applicantData['address']; ?></td>
                    </tr>
                    <tr>
                        <th>Country:</th>
                        <td><?php echo $applicantData['country']; ?></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td><?php echo $applicantData['gender']; ?></td>
                    </tr>
                    <tr>
                        <th>Date of Birth:</th>
                        <td><?php echo $applicantData['dob']; ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number:</th>
                        <td><?php echo $applicantData['contact_no']; ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $applicantData['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><?php echo $applicantData['password']; ?></td>
                    </tr>
                </table>
            </div>
            <a href="admin_page.php">
  <input type="button" class="back-button" value="Back">
</a>
        </body>
        </html>

        <?php
    } else {
        echo "Applicant not found!";
    }

  
   
} else {
    echo "Invalid request!";
}


mysqli_close($conn);
?>