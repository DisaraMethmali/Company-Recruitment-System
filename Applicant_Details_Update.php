
<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Soft.Nexus.lk</title>
        <link rel="stylesheet"  href="../css/employeestyle.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0-1/css/all.min.css" integrity="sha512-xEGx3E22YcUzfX525T3KV7SqNexb09E2CckB6lBB/dT930VlbSX9JnQlLiogtSLAl9yGAJGKDu7O1ZanrqljGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>
        <header class="header">

        <a><img src="logo.png" alt="logo"></a>
            <nav class="navbar">
                <a href="index.html">Home</a>
                <a href="blog.html">Blog</a>
                <a href="project.html">Our projects</a>
                <a href="">About Us</a>
                <a href="">Contact Us</a>
    
                <button class="btnLogin-popup"><a href="login.php">Signout</a></button>
            </nav>
            <form action="" class="search-bar">
                <input type="text" placeholder="Search....">
                <button type="search"><i class='fas fa-search'></i></button>
            </form>
        </header>
        <br>
        <h1>Update Details</h1>
        <br>
        <div class="update-button">
        <button>Employee Details Update</button>
        <button>System Details Update</button>
        </div>
        <br><hr><br>
        <br>
        <h1>Employee Details Update </h1>
        <br>
        <div class="form-group">
            
        </div>
        <br>
        <form action=""  method="POSt">
        <div class="input-details">
            <label for="name">Employee Name:</label>
            <input type="text" class="inputID2" name="name" required >
            <br><br>
            
            <label for="name"> Address:</label>
            <input type="text" class="inputID2" name="address" required>
            <br><br>
            <label for="name">Salary:</label>
            <input type="text" class="inputID2" name="salary" required >
            <br><br>
            <label for="name">Position:</label>
            <input type="text" class="inputID2" name="position" required>
            <br><br>

        </div>
        <br>
        <input type="submit" Value="submit"class="btn3" name="submit">
</form>
        <br>

            <footer class="footer">  
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>QUICK LINKS</h4><br>
                            <ul>
                                <li><a href="#" target="_blank">HOME</a></li>
                                <li><a href="#" target="_blank">BLOGS</a></li>
                                <li><a href="#" target="_blank">RATE</a></li>
                                <li><a href="#" target="_blank">DISCOVER</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>CONTACT US</h4><br>
                            <ul>
                                <li>
                                <span class="fas fa-phone-alt"></span>
                                <span>+94 75 8963207</span>
                                </li>
                                <li>
                                <span class="fas fa-envelope"></span>
                                <span><a href="#" target="_blank" class="email">softnexus@gmail.com</a></span>
                                </li>
                                <li>    
                                <span class="fas fa-map-marker-alt"></span>
                                <span>No 90,<br>&nbsp;&nbsp;&nbsp;&nbsp;Kandy Road,<br>&nbsp;&nbsp;&nbsp;&nbsp;Colombo.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>Do You Need Any Support?</h4><br>
                            <ul>
                                <li><button class="help-button">Help & Support</button></li>
                                
                            </ul>
                        </div>


                        <div class="footer-col">
                            <div class="qrcode">
                            <i class="fa fa-qrcode" aria-hidden="true"></i>
                            </div>
                            <button class="feedback-button">Feedback</button>
                            <h4 class="follow-h4">Follow Us</h4>
                            <div class="social">
                                <a href="#" ><i class="fab fa-facebook-f"></i></a>
                                <a href="#" ><i class="fab fa-twitter"></i></a>
                                <a href="#" ><i class="fab fa-instagram"></i></a>
                                <a href="#" ><i class="fab fa-google-plus"></i></a>
                            </div>
                        </div>
                        
                    </div>
                        <br><hr><br>
                        <p class="lable"><i>&copy;&nbsp;Copyright 2023,soft-nexus All rights Reserved</i></p>
                </div>    
            </footer>
            <?php

            include_once 'config.php';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $position = $_POST['position'];

    $sql = "INSERT INTO employee (id, name, address, salary, position)
            VALUES ('', '$name', '$address', '$salary', '$position')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee added successfully.";
        header("Location: ../html/index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
    </body>
</html>

