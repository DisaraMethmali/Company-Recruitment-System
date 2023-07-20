<?php
session_start();// Start the session
?>

<?php
include 'config.php';// Include the config file
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/hrpage.css">
    <title>HR Page</title>
</head>
<body>

<h1>Vacancy Details</h1>
<br><br><br>
<a href="createVacancy.php?id=' . $row['Id'] . '"><input class="create-button" type = "submit" value="Create"></a>
    <div class="job-posts">
        <?php
        $sql = "SELECT * FROM about";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="job-post">';
                echo '<div class="post-image"><img src="' . $row["image"] . '" alt="Job Post Image"></div>';
                echo '<div class="post-details">';
                echo '<p><strong>Post ID:</strong> ' . $row["Id"] . '</p>';
                echo '<p><strong>Position:</strong> ' . $row["position"] . '</p>';
                echo '<p><strong>Description:</strong> ' . $row["description"] . '</p>';
                echo '<p><strong>Status:</strong> ' . $row["status"] . '</p>';
                echo '<div class="post-actions">';

                echo '<a href="viewVacancy.php?id=' . $row['Id'] . '"><input class="view-button" type="submit" value="View"></a>';
                echo '<a href="editVacancy.php?id=' . $row['Id'] . '"><input class="edit-button" type="submit" value="Edit"></a>';
                echo '<a href="deleteVacancy.php?id=' . $row['Id'] . '"><input class="delete-button" type="submit" value="Delete"></a>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No job posts available.</p>";
        }
        include_once'config.php';// Include the config file
?>
  
        
    </div>
</body>
</html>
