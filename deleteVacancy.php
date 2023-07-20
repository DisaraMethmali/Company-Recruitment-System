<?php
include_once'config.php';
?>
<?php
    $postId = $_GET['id'];

    $query = "DELETE FROM about WHERE Id='$postId'";


    $data=mysqli_query($conn,$query);// Execute the query

    if($data)
    {
        
            echo"<script>alert('Recorded deleted !!')</script>"; // Display a success message
            header("Location:hr_page.php");//Redirect the user back to the HR page
           }
          else{
            echo"<script>alert('Error in delete  !!')</script>";// Display an error message
          
    }
    mysqli_close($conn); // Close the database connection
?>