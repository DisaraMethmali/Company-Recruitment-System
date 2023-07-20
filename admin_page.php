<?php
session_start();
?>
<?php

include 'config.php';
?>
<!DOCTYPE html>

<head>
  <title>Admin page</title>
        <link rel="stylesheet" href="../css/admin_style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="adminmyscript.js"></script>

        <script>
		function delete_data(id){
			if(confirm('Are you sure to delete the record ?')){
				window.location.href = '../php/deleteDetails.php?id='+id;
			}
		}
		</script>

</head>
<body>
      
<div id="admin-menu" >
    <i class='bx bx-menu' id="menu-icon"></i>
        <div class="items">
           
            <ul>
        <li><i class='bx bxs-dashboard'></i><a href="#" id="dashboard-link">Dashboard</a></li>
            <li><i class='bx bx-user' ></i></i><a href="#">Users</a></li>
            <li><i class='bx bxs-user-account' ></i><a href="../html/admin_profile.html">Profile</a></li>
            <li><i class='bx bx-chat' ></i><a href="../php/admin_payments.php">Payments</a></li>

</ul>
        </div>
       
<div class="main-content">
<main>
    <header>
  <center>    <h1>Admin Dashboard</h1></center>
    </header>
    <header> 
<main>
    
    <div class="dashboard">
    <div class="box-wrapper">
        
        <div class="box">
        <?php 
    $select_applicants = mysqli_query($conn, "SELECT * FROM `applicant`") or die('Query failed');
    $number_of_applicants = mysqli_num_rows($select_applicants);
?>
<h3><?php echo $number_of_applicants; ?></h3>
<p>Registered Applicants</p>
        </div>
    <div class="box">
    <?php 
        $select_applicants = mysqli_query($conn, "SELECT * FROM `applicant`") or die('Query failed');
        $number_of_applicants = mysqli_num_rows($select_applicants);
    ?>
    <h3><?php echo $number_of_applicants; ?></h3>
    <p>Applicants</p>
</div>
<div class="box">
    <?php 
        $select_hr_manager = mysqli_query($conn, "SELECT * FROM `employee` WHERE Eposition= 'hr_manager'") or die('query failed');
        $number_of_hr_manager = mysqli_num_rows($select_hr_manager);
    ?>
    <h3><?php echo $number_of_hr_manager; ?></h3>
    <p>HR Managers</p>
</div>

<div class="box">
    <?php 
        $select_hiring_manager = mysqli_query($conn, "SELECT * FROM `employee` WHERE Eposition = 'hiring_manager'") or die('query failed');
        $number_of_hiring_manager = mysqli_num_rows($select_hiring_manager);
    ?>
    <h3><?php echo $number_of_hiring_manager; ?></h3>
    <p>Hiring Managers</p>
</div>


<div class="box">
    <?php 
        $select_payments = mysqli_query($conn, "SELECT * FROM `payments`") or die('query failed');
        $number_of_payments = mysqli_num_rows($select_payments);
    ?>
    <h3><?php echo $number_of_payments; ?></h3>
    <p>Payments</p>
</div>

</div>
<br><br><br>
<h2>Applicants  details</h2>
<br><br>
<a href="../php/add_applicant.php">
  <input type="button" class="add-button" value="Add Applicant">
</a>


<div id="tbl-wrapper">
  <table id="tbl">
<table id="tbl">
    <tr><th class="col1">Applicant ID</th>
        <th class="col1">First Name</th>
        <th class="col1">Last Name</th>
        <th class="col1">Address</th>
        <th class="col1">Country</th>
        <th class="col1">Gender</th>
        <th class="col1">Date of birth</th>
        <th class="col1">Phone Number</th>
        <th class="col1">Email</th>
       
        <th class="col1">Password</th>
        <th class="col2">View</th>
        <th class="col3">Edit</th>
        <th class="col4">Delete</th>
        


</tr>
<?php
$sql="select*from applicant";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())

  {
    echo"<tr>
    <td>".$row["applicant_id"]."</td>
    <td>".$row["first_name"]."</td>
    <td>".$row["last_name"]."</td>
    <td>".$row["address"]."</td>
    <td>".$row["country"]."</td>
    <td>".$row["gender"]."</td>
    <td>".$row["dob"]."</td>
    <td>".$row["contact_no"]."</td>
    <td>".$row["email"]."</td>
   
    <td>".$row["password"]."</td>";
   
    echo "<td><a href='../php/viewDetails.php?id=".$row['applicant_id']."'><input class='view-button' type='submit' value='View'></a></td>";
    echo "<td><a href='../php/editDetails.php?id=".$row['applicant_id']."'><input class='edit-button'  type='submit' value='Edit'></a></td>";
    //echo "<td><a href='../php/deleteDetails.php?id=".$row['applicant_id']."'><input class='delete-button' onclick = 'delete_data($row['applicant_id']) type='submit' value='Delete'></a></td>
    echo "<td><input class='delete-button' onclick = 'delete_data($row[applicant_id])' type='submit' value='Delete'></td>

    </tr>";

}
  
  
}
else{
    echo"Empty Rows";
}
echo"</table>";
include_once'config.php';
?>
  
  
</div>

</table>
</div>
</header>
</main>
</div>