<?php
include_once'config.php';
?>
<?php 

    $eid=$_GET['id'];

    $query="delete from employee where eid='$eid'";

    $data=mysqli_query($conn,$query);

    if($data)
    {
        
            echo"<script>alert('Recorded deleted !!')</script>";
            header("Location:system.php");
           }
          else{
            echo"<script>alert('Error in delete  !!')</script>";
          
    }
    mysqli_close($conn);
?>