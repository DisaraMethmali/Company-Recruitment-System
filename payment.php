<?php
include_once 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$owner = $_POST['owner'];
$email = $_POST['email'];
$cardNumber = $_POST['card_number'];
$cvv = $_POST['cvv'];
$expirationMonth = $_POST['months'];
$expirationYear = $_POST['years'];





$sql = "INSERT INTO payments (payment_id,owner, email, card_number, cvv, expiration_month, expiration_year)
        VALUES ('','$owner', '$email', '$cardNumber', '$cvv', '$expirationMonth', '$expirationYear')";

if ($conn->query($sql) === TRUE) {
    echo "Payment data saved successfully.";
    header("Location:../html/index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
<!DOCTYPE html>


<head>
   
    <title>Payment Form</title>
    <link rel="stylesheet" href="../css/paymentstyle.css">
    
   
</head>

<body>
    <div class="container">
        <h1> Payment Form</h1>
        <form method="post" action="../php/payment.php">
            <div class="first-row">
                <div class="owner">
                    <h3>Owner</h3>
                    <div class="input-field">
                        <input type="text" name="owner" placeholder="Owner name">
                    </div>
                </div>
            </div>
            <div class="third-row">
                <h3>Email</h3>
                <div class="input-field">
                    <input type="email" name="email" placeholder="owner email">
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Card Number</h3>
                    <div class="input-field">
                        <input type="text" name="card_number" placeholder="1111-1111-1111-1111">
                    </div>
                </div>
                <div class="cvv">
                    <h3>CVV</h3>
                    <div class="input-field">
                        <input type="password" name="cvv" placeholder="cvv">
                    </div>
                </div>
            </div>
            <div class="third-row">
                <h3>Expiration Date</h3>
                <div class="selection">
                    <div class="date">
                        <select name="months" id="months">
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                        </select>
                        <select name="years" id="years">
                            <option value="2028">2028</option>
                            <option value="2027">2027</option>
                            <option value="2026">2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="cards">
                        <img src="../images/mc.png" alt="">
                        <img src="../images/vi.png" alt="">
                        <img src="../images/pp.png" alt="">
                    </div>
                </div>
            </div>
            <button type="submit" class="confirm">Confirm</button>
        </form>
    </div>
</body>

</html>