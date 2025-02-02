<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title signup">
                Register Form
            </div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="signup" checked>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
             <div class="form-inner">
                <form action="registration.php" class="signup-form" method="post">
                    <div class="field">
                        <input type="text" id="fname" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field">
                        <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="field">
                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="tel" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                    </div>
                    <div class="field">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                </form>


                
<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
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

    // Check if the phone number is already registered
    // Check if the phone number is already registered
$check_query = "SELECT * FROM registration WHERE phone_number = '$phone_number'";


    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        echo '<script>alert("You are already registered. Please log in.");</script>';
        echo '<script>window.location.href = "login.php";</script>';
    } else {
        // Add the user registration data to the appropriate table
        $sql = "INSERT INTO registration (fname, lname, phone_number, email, password) VALUES ('$fname', '$lname', '$phone_number', '$email', '$password')";
        

        if ($conn->multi_query($sql) === TRUE) {
            echo '<script>alert("Registration successful!");</script>';
            echo '<script>window.location.href = "login.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
 }
?>

             </div>
        </div>
    </div>
    
    <script>
        const signupForm = document.getElementById("signupForm");
        const password = document.getElementById("password");
        const passwordError = document.getElementById("passwordError");
        const popup = document.getElementById("popup");

        signupForm.addEventListener("submit", function(event) {
            event.preventDefault();
          
            // Validate the password
            if (password.value.length < 8) {
                
                passwordError.textContent = "Password must be at least 8 characters long.";
                passwordError.style.display = "block";
                return; 
            } else {
                passwordError.style.display = "none"; 
            }
          
            // Assuming the registration is successful
            showPopup();
        });

        function showPopup() {
            popup.style.display = "block";
        }

        function closePopup() {
            popup.style.display = "none";
        }
    </script>   
   
</body>

</html>