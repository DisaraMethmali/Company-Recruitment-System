<?php
session_start();
?>
<?php

include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--payment page-->
        <link rel="stylesheet" href="../css/admin_style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="adminmyscript.js"></script>

</head>
<body>
<h2>Payments  details</h2>
<br><br>



<div id="tbl-wrapper">
 
<table id="tbl">
    <tr><th class="col1">Paymnet ID</th>
        <th class="col1">Owner</th>
        
        <th class="col1">Email</th>
        <th class="col1">Card Number</th>
        <th class="col1">CVV</th>
        <th class="col1">Months</th>
        <th class="col1">Years</th>
       
       
      

</tr>
<?php
$sql="select*from payments";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())

  {
    echo"<tr>
    <td>".$row["payment_id"]."</td>
    <td>".$row["owner"]."</td>
    <td>".$row["email"]."</td>
    <td>".$row["card_number"]."</td>
    <td>".$row["cvv"]."</td>
    <td>".$row["expiration_month"]."</td>
    <td>".$row["expiration_year"]."</td>;
  
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