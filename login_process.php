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


