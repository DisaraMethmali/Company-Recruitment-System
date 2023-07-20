<?php

include_once'config.php';
?>
<?php


    $interviewID = $_GET['id'];

    $sql = "DELETE FROM interviews WHERE interviewID = '$interviewID'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Interview deleted successfully')</script>";
        header("Location: recruiterpage.php");
        exit;
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
    }

    mysqli_close($conn);

 
?>
