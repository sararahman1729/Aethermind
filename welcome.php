<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["feedback"]) && !empty($_POST["feedback"])) {
       
        $feedback = htmlspecialchars($_POST["feedback"]);

        echo  '<script>alert("Thank you for your feedback: $feedback");</script>' ;
    } 
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Website</title>

    <link rel ="stylesheet" href= "welcom.css" >   

  

</head>
<body>

<header>
    <div class="logo">
        
        <img src="logo.png" alt="Aethermind">
    </div>
    <div class="website-name">
      
        <h1>Aethermind</h1>
    </div>
    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="Archive\index.html">Find Location</a></li>
            <li><a href="http://127.0.0.1:5000">Chat Us</a></li>
        </ul>
    </nav>
</header>

<main>
    
        <div class="welcome-message">
            <h2>Welcome to Aethermind</h2>
            <p>At Aethermind, we understand the importance of mental health and well-being.<br> Our platform is dedicated to providing support, guidance, and resources <br> to the individuals who may be struggling with mental health issues.</p>
        </div>
        <div class="introduction-container">
            <div class="introduction">
                <p>To fulfill our goal, we've developed cutting-edge tools and technologies to help detect and identify potential mental health concerns. Through our innovative platform, users can access a range of assessment tools, self-assessment quizzes, and screening tests designed to detect early signs of common mental health conditions such as anxiety, depression, stress, and more.</p>
                <p>Our mission is to empower individuals to take control of their mental health and seek appropriate support and treatment when needed. By promoting awareness, early intervention, and destigmatization, we aim to create a supportive and inclusive community where everyone can thrive.</p>
                <p>Join us on our journey to prioritize mental health and well-being. Together, we can make a positive impact and promote mental wellness for all.</p>
            </div>
            <div class="gif-container">
                <img src="giphy.gif" alt="Your GIF">
            </div>
        </div>
    
</main>

<footer>
    <h2>Feedback</h2>
    <form class="feedback-form" action="#" method="post">
        <textarea name="feedback" placeholder="Enter your feedback here..." required></textarea>
        <button type="submit">Submit </button>
    </form>
</footer>

</body>
</html>
