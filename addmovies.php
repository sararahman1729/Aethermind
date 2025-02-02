<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Movies</title>
  <style>
    body {
        background-image: url('film-camera-cinema-movie.jpg');
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    }
   

    header {
     
        background-image: linear-gradient(135deg, rgb(234, 188, 127),#f0a993, #f0a04b, rgb(214, 174, 121));
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
      color: black;
      padding: 10px 20px;
      text-align: center;
      display: flex;
      /* justify-content: space-between; */
      align-items: center;
      font-family: 'Times New Roman', Times, serif;
    }
    header h2 {
      margin: 0;
      font-size: 26px;
      padding-left: 150px;
      color: black;
    }
    header h1 {
      margin: 0;
      font-size: 34px;
      padding-left: 20px;
    }

    header img {
      height: 60px;
      width:auto;
      vertical-align: middle;
    }

    .container {
        background-color: rgba(0, 0, 0, 0.5);
        /* background-color: transparent; */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
      margin: 20px auto;
      width: 80%;
    }
    form {
      border: 2px solid #ccc;
      padding: 20px;
      margin-top: 70px;
      border-radius: 5px;
      background-color: transparent;
      text-shadow:  0 2px 4px rgba(0, 0, 0, 0.5);
      color:white
      
    }
    input[type="text"],
    input[type="file"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      text-shadow:  0 2px 4px rgba(0, 0, 0, 0.9);
      
    }
    input[type="submit"] {
      background-color: #333;
      color: white;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: brown;
    }
  </style>
</head>
<body>
<header>
    <img src="—Pngtree—mindset and mental health_14904757.png" alt="Logo">
    <h1>Aethermind</h1>
    <h2>Add New Movies Here</h2>
</header>
  <div class="container">
    <form action="#" method="POST" enctype="multipart/form-data">
      <label for="Movie_title">Movie Title:</label>
      <input type="text" id="Movie_title" name="Movie_title" required>
      <label for="genre">Genre:</label>
      <input type="text" id="genre" name="genre" required>
      <label for="director">Director:</label>
      <input type="text" id="director" name="director" required>
      <label for="image">Image:</label>
      <input type="file" id="image" name="image" accept="image/*" >
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>

<?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'aethermind';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $movie_name = $_POST['Movie_name'];
    $genre = $_POST['genre'];
    $director = $_POST['Director'];

    // Handle image upload
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = 'uploads/' . $image_name; // Adjust the path as needed
        move_uploaded_file($image_tmp, $image_path);
    }

    // Insert data into the database
    $sql = "INSERT INTO movies (title, genre, director, image) VALUES ('$movie_name', '$genre', '$director', '$image_path')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


