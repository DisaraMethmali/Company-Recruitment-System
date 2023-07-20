<?php
session_start();
include 'config.php';

if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    if (isset($_POST['submit'])) {
        $position = $_POST['position'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        // Check if a file was uploaded
        if ($_FILES['image']['name']) {
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];

            // Move the uploaded file to a desired location
            
        } else {
            $image = $row['image']; // If no new image was uploaded, use the existing image
        }

        $sql = "UPDATE about SET image='$image', position='$position', description='$description', status='$status' WHERE Id='$postId'";
        if ($conn->query($sql) === TRUE) {
            // Success message or redirection to another page
            echo "Post updated successfully.";
            header("Location:hr_page.php");
        } else {
            echo "Error updating post: " . $conn->error;
        }
    }

    $sql = "SELECT * FROM about WHERE Id = '$postId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No vacancy found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>
   

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/create.css">
    <title>Edit Vacancy</title>
</head>
<body>
    <div class="edit-vacancy">
        <h2>Edit vacancy</h2><br><br>
        <form method="POST" action="" enctype="multipart/form-data">

            <label>Image:</label><br>
            <img src="uploads/<?php echo $row['image']; ?>" alt="Job Post Image"><br><br>
            <input type="file" name="image"><br><br>

            <label>Position:</label><br>
            <input type="text" name="position" value="<?php echo $row['position']; ?>"><br><br>

            <label>Description:</label><br>
            <textarea name="description"><?php echo $row['description']; ?></textarea><br><br>

            <label>Status:</label><br>
            <input type="text" name="status" value="<?php echo $row['status']; ?>"><br><br>

            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>
