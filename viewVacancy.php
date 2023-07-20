<?php
session_start();// Start the session
?>

<?php
include 'config.php';// Include the config file

?>

<!DOCTYPE html>
<html>
<head>
	<title>view Vacancy</title>
    <link rel="stylesheet" href="../css/create.css">
</title>
<body>

<a href="hr_page.php"><input class="back-button" type="submit" value="back"></a>


<div class="view-post">
        <?php
        if (isset($_GET['id'])) {
            $postId = $_GET['id'];
            $sql = "SELECT * FROM about WHERE Id = '$postId'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo '<div class="post-details">';
          
				echo '<img src="' . $row["image"] . '" alt="Post Image"><br>';
                echo '<h2><strong>Position:</strong>' . $row["position"] . '</h2><br>';
                echo '<p><strong>Post ID:</strong> ' . $row["Id"] . '</p><br>';
                echo '<p><strong>Description:</strong> ' . $row["description"] . '</p><br>';
                echo '<p><strong>Status:</strong> ' . $row["status"] . '</p><br>';
                echo '</div>';
            } else {
                echo "<p>Post not found.</p>";
            }
        } else {
            echo "<p>Invalid request.</p>";
        }
        ?>
</body>
</html>
