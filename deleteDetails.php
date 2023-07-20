<?php
include_once'config.php';
?>
<?php
    $applicant_id=$_GET['id'];

    $query="DELETE from applicant where applicant_id='$applicant_id'";//execute the query

    $data=mysqli_query($conn,$query);

    if($data)
    {
        
            echo"<script>alert('Recorded deleted !!')</script>";//delete the recorded if success
            header("Location:admin_page.php");
           }
          else{
            echo"<script>alert('Error in delete  !!')</script>";//error message
          
    }
    mysqli_close($conn);
?>