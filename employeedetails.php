
<?php
    include_once 'config.php';
?>
<!DOCTYPE html>

    <head>
        <title>Soft.Nexus.lk</title>
        <link rel="stylesheet"  href="../css/employeedetails.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0-1/css/all.min.css" integrity="sha512-xEGx3E22YcUzfX525T3KV7SqNexb09E2CckB6lBB/dT930VlbSX9JnQlLiogtSLAl9yGAJGKDu7O1ZanrqljGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>
        <style>
            * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

body {
    background-color: hwb(239 44% 9%);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    animation: pageLoadAnimation 1s forwards;
    color: black;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 12.5%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    position: relative;
}

.img1 {
    margin-top: 0;
    margin-left: 0;
    width: 200px;
}

.navbar a {
    position: relative;
    font-size: 16px;
    color: lightcyan;
    text-decoration: rgba(1, 1, 49, 0.918);
    font-weight: 500;
    margin-right: 30px;
}

.navbar a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 2px;
    background: white;
    border-radius: 5px;
    transform: translateY(10px);
    opacity: 0;
    transition: .5s;
}

.navbar a:hover::after {
    transform: translateY();
    opacity: 1;
}

.search-bar {
    width: 250px;
    height: 45px;
    background: transparent;
    border: 2px solid white;
    border-radius: 6px;
    display: flex;
    align-items: center;
}

.search-bar input {
    width: 100%;
    background: transparent;
    border: none;
    outline: none;
    padding-left: 10px;
    font-size: 16px;
    color: antiquewhite;
}

.search-bar input::placeholder {
    color: aliceblue;
}

.search-bar button {
    width: 40px;
    height: 100%;
    background: transparent;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.search-bar button i {
    font-size: 22px;
    color: white;
}

.menu-bar {
    background-color: antiquewhite;
    margin-top: 70px;
    text-align: left;
    margin-left: -520px;
    position: absolute;
}

.menu-bar ul {
    display: inline-flex;
    list-style: none;
    color: rgba(4, 4, 58, 0.89);
    float: left;
}

.menu-bar ul li {
    width: 120px;
    margin: 5px;
    padding: 5px;
    height: 20px;
    opacity: .8;
    font-size: 16px;
}

.menu-bar ul li a {
    text-decoration: none;
    display: block;
    color: rgb(15, 15, 236);
}

.menu-bar ul li a:hover {
    background-color: rgb(147, 141, 238);
}

.menu-bar ul li ul li {
    display: none;
}

.menu-bar ul li:hover ul li {
    display: block;
}

.navbar .btnLogin-popup {
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid white;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    color: white;
    margin-left: 40px;
}

.navbar .btnLogin-popup:hover {
    background: white;
    color: black;
}

.container {
    max-width: 100%;
    width: 100%;
    margin: auto;
}

.text {
    width: 450px;
    height: 100px;
}

.btn-submit {
    width: 200px;
    height: 50px;
    font-size: 20px;
    margin-left: 250px;
    border-radius: 10px;
}

.btn-submit:hover {
    background-color: #0d0147;
    color: #fff;
}

ul {
    list-style: none;
}

a {
    line-height: 1.5;
    color: #fff;
    text-decoration: none;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.detailsForm {
    background-color: rgb(185, 190, 248);
    padding: 50px;
    padding-bottom: 100px;
    width: 700px;
    box-shadow: 10px 10px 5px rgb(0, 0, 0);
    margin-left: auto;
    margin-right: auto;
    margin-top: auto;
    margin-bottom: auto;
    border-radius: 15px;
    border-color: black;
    border-width: thin;
}

h1 {
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
}

.btn1 {
    width: 120px;
    height: 40px;
    font-size: 20px;
    border-radius: 10px;
    font-weight: bold;
    margin-left: 435px;
}

.btn1:hover {
    background-color: rgb(91, 69, 187);
    color: white;
}

.d1 {
    font-size: 20px;
    font-weight: bold;
}

.inputID2 {
    width: 350px;
    height: 40px;
    text-align: justify;
    font-size: 20px;
    border-radius: 5px;
    display: inline-block;
}

.d1 label {
    display: inline-block;
    padding-top: 5px;
    padding-top: 10px;
    width: 200px;
    color: rgb(0, 0, 0);
}

.d2 {
    margin-left: 150px;
    margin-top: 30px;
}

.d2 a {
    font-size: 20px;
    color: rgb(70, 70, 70);
    font-weight: 700;
}

.d2 a:hover {
    color: black;
}

.footer {
    width: 100%;
    position: relative;
    background-color: #0d0147;
    padding: 10px 0;
    color: #fff;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    bottom: 0;
    font-size: 16px;
}

.footer-col {
    margin-top: 50px;
    width: 25%;
    padding: 0 20px;
    left: 20px;
}

.footer-col h4 {
    font-size: 18px;
    font-weight: bold;
    position: relative;
}

.footer-col h4::before {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 50px;
    height: 2px;
    background: #fff;
}

.footer-col ul li {
    line-height: 35px;
}

a:hover {
    padding-left: 8px;
    transition: .5s;
    color: rgb(22, 79, 202);
}

.email {
    border-bottom: 1px solid #fff;
}

.help-button {
    width: 150px;
    font-weight: bold;
    font-size: 16px;
    background-color: aliceblue;
    margin-left: 30px;
    padding: 10px;
    border-radius: 4px;
}

.help-button:hover {
    margin-top: 5px;
    transition: .5s;
    background-color: #0a84ff;
    color: white;
}

.feedback-button {
    position: conner;
    width: 100px;
    font-weight: bold;
    font-size: 16px;
    background-color: aliceblue;
    margin-left: 300px;
    padding: 10px;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    transform: rotate(270deg);
}

.feedback-button:hover {
    transition: .3s;
    background-color: #0a84ff;
    color: white;
}

.copyrihght {
    text-align: center;
    color: white;
}

.qrcode {
    font-size: 70px;
    padding-left: 40px;
}

.follow-h4 {
    margin-left: 40px;
    position: relative;
}

.social {
    font-size: 20px;
    margin-top: 30px;
}

.social a {
    position: relative;
    margin-left: 20px;
    transition: .3s;
    padding: 0 20px;
}

.social a:hover {
    color: rgb(38, 150, 248);
}
            </style>
       
        <h1>Employee Details Update </h1>
        <br>
        <div class="form-group">
            
        </div>
        <br>
        <form action="system.php"  method="POSt">
        <div class="input-details">
            <label for="name">Employee Name:</label>
            <input type="text" class="inputID2" name="Ename" required >
            <br><br>
            
            <label for="name"> Address:</label>
            <input type="text" class="inputID2" name="Eaddress" required>
            <br><br>
            <label for="name">Salary:</label>
            <input type="text" class="inputID2" name="salary" required >
            <br><br>
            <label for="name">Position:</label>
            <input type="text" class="inputID2" name="Eposition" required>
            <br><br>

        </div>
        <br>
        <input type="submit" Value="submit"class="btn3" name="submit">
</form>
        <br>

            <?php

            include_once 'config.php';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $Ename = $_POST['Ename'];
    $Eaddress = $_POST['Eaddress'];
    $salary = $_POST['salary'];
    $Eposition = $_POST['Eposition'];

    $sql = "INSERT INTO employee (eid, Ename, Eaddress, salary, Eposition)
            VALUES ('', '$Ename', '$Eaddress', '$salary', '$Eposition')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee added successfully.";
        header("Location: ../php/system.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

    </body>
</html>

