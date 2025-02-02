<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login Form
            </div>
        </div>
        <div class="form-container">
            
            </div>
            <div class="form-inner">
                <form action="frontpage.php" class="login">
                    <div class="field">
                        <input type="tel" id="phone_number" placeholder="Phone Number" required>
                    </div>
                    <div class="field">
                        <input type="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link">
                        <a href="forgotpass.php">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="registration.php">Signup now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");

    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    </script>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    

    // Add your database connection and error handling here
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'aethermind';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query to fetch user information based on phone number
    $sql = "SELECT * FROM registration WHERE phone_number = '$phone_number'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, check the password
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];
    
        if ($password == $stored_password) {
            // Password is correct, set session variables
            header('Location: frontpage.php');
        } else {
            // Password is incorrect
            echo '<script>alert("Incorrect password. Please try again.");</script>';
            
           // echo '<script>window.location.href = "login.php";</script>';
        }
    } else {
        // User not found
        echo '<script>alert("User not found. Please register.");</script>';
        echo '<script>window.location.href = "registration.php";</script>';
    }
    
    $conn->close();
}
?>
</body>

</html>