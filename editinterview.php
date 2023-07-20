<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_schedule'])) {
    $candidate_id = $_POST['candidate_id'];
    $interview_date = $_POST['interview_date'];
    $interview_time = $_POST['interview_time'];
    $interviewID = $_POST['interviewID'];

    $sql = "UPDATE interviews SET candidate_id = '$candidate_id', interview_date = '$interview_date', interview_time = '$interview_time' WHERE interviewID = '$interviewID'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Interview updated successfully')</script>";
        header("Location: recruiterpage.php");
        exit;
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: lightskyblue;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: lawngreen;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Edit Schedule</h1>
    <form method="POST" action="">
        <div>
            <label for="candidate_id">Candidate ID:</label>
            <input type="text" id="candidate_id" name="candidate_id" required>
        </div>
        <div>
            <label for="interview_date">Interview Date:</label>
            <input type="date" id="interview_date" name="interview_date" required>
        </div>
        <div>
            <label for="interview_time">Interview Time:</label>
            <input type="time" id="interview_time" name="interview_time" required>
        </div>
        <div>
            <label for="interview_id">Interview ID:</label>
            <input type="text" id="interviewID" name="interviewID" readonly>
        </div>
        <div>
            <input type="submit" name="edit_schedule" value="Update Schedule">
        </div>
    </form>
</body>
</html>
