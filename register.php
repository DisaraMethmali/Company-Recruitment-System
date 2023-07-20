<?php
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $contact_no = $_POST['contact_no']; 
    $email = $_POST['email'];
    $password = $_POST['password']; 
//inser data into database
    $sql = "INSERT INTO applicant (applicant_id, first_name, last_name, address, country, gender, dob, contact_no, email, password)
            VALUES ('', '$first_name', '$last_name', '$address', '$country', '$gender', '$dob', '$contact_no', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful.";//successful messages
        header("Location: ../php/createprofilepage.php");
    } else {
        //error display
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<DOCTYPE Html>

    <head>

        <link rel="stylesheet" href="../css/style1.css">
        <script src="../js/script.js"></script>
       
        <link rel="stylesheet" href="footer.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="script.js"></script>
        <title>aa</title>
    </head>

<script>
        window.addEventListener("load", function() {
            document.body.style.opacity = 1;
        });

        function checkPassword() {
    if (document.getElementById("password").value != document.getElementById("cnfrpwd").value) {
        alert("Password Mismatched!");
        return false;
    } else {
        alert("success");
        return true;
    }
}
    </script>
<body>

        <header class="header">
            <nav class="navbar">
            <a href="../html/index.html">Home</a>
                <a href="../html/blog.html">Blog</a>
                <a href="../html/project.html">Our projects</a>
                <a href="">About Us</a>
                <a href="">Contact Us</a>

                <button class="btnLogin-popup"><a href="login.php">Login</a></button>
            </nav>
            <form action="" class="search-bar">
                <input type="text" placeholder="Search....">
                <button type="submit"><i class='bx bx-search'></i></button>
            </form>
        </header>
        <br>
    <div class="Containerreg">
        <form id="reg" method="post" onsubmit="return checkPassword()" action="register.php">
            <h2>Register</h2>

            <label>First Name : </label>
            <input type="text" name="first_name" class="register" placeholder="Enter first name" required>
            <br><br>

            <label>Last Name : </label>
            <input type="text" name="last_name" class="register" placeholder="Enter last name" required>
            <br><br>

            <label>Address : </label>
            <textarea name="address" rows="8" cols="50"></textarea>
            <br><br>

            <label>Country : </label>
            <select name="country" placeholder="Sri Lanka" required>
                <option value="">Sri Lanka</option>
                <option value="Colombo">Colombo</option>
                <option value="Negombo">Negombo</option>
                <option value="Ja-Ela">Ja-Ela</option>
                <option value="Malabe">Malabe</option>
                <option value="Matara">Matara</option>
                <option value="Kandy">Kandy</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Galle">Galle</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Nugegoda">Nugegoda</option>
            </select>
            <br><br>

            <label>Gender : </label>
            <input type="radio" name="gender" value="Male" id="male"><span>Male</span>
            <input type="radio" name="gender" value="Female" id="female"><span>Female</span>
            <br><br>

            <label>Date of Birth : </label>
<input type="Date" name="dob" id="dob" required>
<br><br>

<label>Phone Number :</label>
<input type="phone" class="contact_no" name="contact_no" placeholder="0777777777" pattern="[0-9]{10}" required>
<br><br>

<label>Email : </label>
<input type="email" class="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
<br><br>

<label>Password:</label>
<input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required><br><br>

          <label>  Re-enter Password:</label>
            <input type="password" id="cnfrpwd" required>
            <br><br/>
 <p>SEND YOUR CV TO OUR COMPANY EMAIL ADDRESS<p><br>
 <b>softnexus@gmail.com<b>
            <input type="checkbox" required>  I agree to the terms of use
            <br/><br/>
         <center>   <input type="submit" value="Submit" id="submitBtn"></center>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
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

</html>
