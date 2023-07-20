<?php
session_start();
?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //give specific username and password for the admin

    $username=$_POST["username"];
    $password=$_POST["password"];
    if($username=="admin"&&$password=="admin123")
    {
        $_SESSION['logged_user']=$username;

    }
    else{
        echo"<script>alert('You have enter the incorrect username or password')</script>";
    }
}
?>

<DOCTYPE Html>

    <head>


        <link rel="stylesheet" href="../css/style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="script.js"></script>
        <title>admin login</title>
    </head>

    <body>
        <header class="header">
            <nav class="navbar">
            <a href="../html/index.html">Home</a>
                <a href="../html/blog.html">Blog</a>
                <a href="../html/project.html">Our projects</a>
                <a href="">About Us</a>
                <a href="">Contact Us</a>

                <button class="btnLogin-popup">Login</button>
            </nav>
            <form action="" class="search-bar">
                <input type="text" placeholder="Search....">
                <button type="submit"><i class='bx bx-search'></i></button>
            </form>
        </header>

        


        <div class="wrapper">

            <div class="form-box login">
                <h2>Login</h2>
                <form method="POST" action="../php/admin_page.php">
                    <div class="input-box">
                        <span class="icon"><i class='bx bx-user' ></i>
            </span>
                        <input type="username" id="username" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i>
    </span>
                        <input type="password" id="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me
    </label><a href="#">Forgot password?</a>
                    </div>

                    <br><br>
                    <div class="login-register">
                        <p>Don't have an account?<a href="#" class="register-link">Register</a><br><br>
                    </div>
                    <button type="submit" class="btn">Login</button>

                </form>
            </div>
        </div>
        
        </div>
        </div>
        </div>
        </center>

    </body>