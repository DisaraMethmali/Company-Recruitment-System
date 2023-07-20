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


    // insert data into database
    $sql = "INSERT INTO applicant (applicant_id, first_name, last_name, address, country, gender, dob, contact_no, email, password)
            VALUES ('', '$first_name', '$last_name', '$address', '$country', '$gender', '$dob', '$contact_no', '$email', '$password')";

// check the connection
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful.";

        //header goes to admin_page.php
        header("Location:../php/admin_page.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<DOCTYPE Html>

    <head>

        <link rel="stylesheet" href="../css/add_style.css">
        <script src="script.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="script.js"></script>
        <script>function checkPassword() {
    if (document.getElementById("password").value != document.getElementById("cnfrpwd").value) {
        alert("Password Mismatched!");
        return false;
    } else {
        alert("success");
        return true;
    }
}
</script>
        <title>aa</title>
    </head>
<body>
<!--form-->
      
    <div class="Container">
        <form id="reg" method="post" onsubmit="return checkPassword()" action="add_applicant.php">
            <h2>Add Apllicant Details</h2>

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
            <br/><br/>
         <center>   <input type="submit" value="Add" id="submitBtn"></center>
        </form>
    </div>
</body>

</html>
