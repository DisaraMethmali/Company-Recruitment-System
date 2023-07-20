<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    if (isset($_GET['id'])) {
        $eid = $_GET['id'];
    
        $query = "SELECT * FROM `employee` WHERE `eid` = '$eid'";
        $result = mysqli_query($conn, $query);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $EmployeeData = mysqli_fetch_assoc($result);
    
       
    
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="../css/viewEmployeestyle.css">
   
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                      <b>  id</b>:
                        <p><?php echo $EmployeeData["eid"];?>
                       <br> <label>Name</label><br>
                        <p><b><?php echo $EmployeeData["Ename"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p><b><?php echo $EmployeeData["Eaddress"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p><b><?php echo $EmployeeData["salary"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p><b><?php echo $EmployeeData["Eposition"]; ?></b></p>
                    </div>
                    <p><a href="../php/sytem.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>