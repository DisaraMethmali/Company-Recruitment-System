<?php
session_start();
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM applicant WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        echo "<script>alert('Login successful.');</script>";
        header("Location: index.html");
        exit();
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>



<DOCTYPE Html>

    <head>


        <link rel="stylesheet" href="../css/style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="script.js"></script>
        <title>aa</title>
    </head>

    <body>
        <header class="header">
            <nav class="navbar">
            <a href="../html/index.html">Home</a>
                <a href="../html/blog.html">Blog</a>
                <a href="../html/project.html">Our projects</a>
                <a href="../php/aboutUs.php">About Us</a>
                <a href="../html/contactus.html">Contact Us</a>

                <button class="btnLogin-popup"><a href="login.html">Login</a></button>
            </nav>
            <form action="login.php" class="search-bar">
                <input type="text" placeholder="Search....">
                <button type="submit"><i class='bx bx-search'></i></button>
            </form>
        </header>




        <div class="wrapper">

            <div class="form-box login">
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <div class="input-box">
                        <span class="icon"><i class='bx bx-user' ></i>
            </span>
                        <input type="username" name="email" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i>
    </span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label><a href="#">Forgot password?</a>
                    </div>

                    <br><br>
                    <div class="login-register">
                        <p>Don't have an account?<a href="../php/register.php" class="register-link">Register</a><br><br>
                    </div>
                    <button type="submit" class="btn">Login</button>

                </form>
            </div>
        </div>
        <button><a href="../php/systemlogin.php">System Login</a></button>
        <button><a href="../php/admin_login.php">Admin Login</a></button>
        <button><a href="../php/HR_login.php">HR Login</a></button>
        <button><a href="../php/recruiter_login.php">Recruiter Login</a></button>
        <br>
        <br>
        <br>
        
        </div>
        </div>
        </div>
        </center>
        <footer>
                <div class="containerf">
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
                                <span>No 90,<br>Kandy Road,<br>Colombo.</span>
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
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class="bx bxl-twitter"></i></a>
                            <a href="#"><i class="bx bxl-instagram"></i></a>
                            <a href="#"><i class="bx bxl-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <center>
                    <br>
                    <hr><br>
                    <label class="lable"><i>Copyright 2023,soft-nexus All rights Reserved</i></label>
                </center>
        </div>
        </footer>
    </body>