<?php
session_start();
include 'config.php';

// Fetch Scheduled Interviews
$sql = "SELECT * FROM interviews";
$result = mysqli_query($conn, $sql);

$interviews = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $interviews[] = $row;
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Recruiter page</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: lightskyblue;
        }

        h1 {
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: lightseagreen;
        }

        
    </style>
<body>
    
    <h1>Scheduled Interviews</h1>
    <br><br>
    <a href="addschedule.php">Add Schedule</a>
    <button><a href="../php/recruiter.php">Schedule event</a></button>
    <table>
        <thead>
            <tr>
                
                <th>Candidate ID</th>
                <th>Interview Date</th>
                <th>Interview Time</th>
                <th>Interview ID</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($interviews as $interview) : ?>
                <tr>
                    
                    <td><?= $interview['candidate_id'] ?></td>
                    <td><?= $interview['interview_date'] ?></td>
                    <td><?= $interview['interview_time'] ?></td>
                    <td><?= $interview['interviewID'] ?></td>
                    <td>
                        <a href="editinterview.php?id=<?= $interview['interviewID'] ?>">Edit</a>
                        <a href="deleteinterview.php?delete_schedule=<?= $interview['interviewID'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>
