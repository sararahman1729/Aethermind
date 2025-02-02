<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Books</title>
  <style>
    body {
        background-image: url('7df22bf6702e6c7e73a6d0cea73f68c4.jpg');
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    }
    
    header {
     
        background-image: linear-gradient(rgb(241, 201, 208),rgb(222, 160, 222),rgb(252, 170, 231),rgb(181, 219, 234),rgb(195, 148, 195)); 
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
      height: 50px;
      width:auto;
      vertical-align: middle;
    }

    .container {
        background-color: rgba(255, 192, 203, 0.5);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
      margin: 20px auto;
      width: 80%;
    }
    form {
      border: 2px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      background-color: transparent;
      text-shadow:  0 2px 4px rgba(0, 0, 0, 0.5);
      
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
      background-color: purple;
    }
  </style>
</head>
<body>
<header>
    <img src="—Pngtree—mindset and mental health_14904757.png" alt="Logo">
    <h1>Aethermind</h1>
    <h2>Add new books here</h2>
</header>
  <div class="container">
    <form action="#" method="POST" enctype="multipart/form-data">
      <label for="book_name">Book Name:</label>
      <input type="text" id="book_name" name="book_name" required>
      <label for="genre">Genre:</label>
      <input type="text" id="genre" name="genre" required>
      <label for="author">Author:</label>
      <input type="text" id="author" name="author" required>
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
    $book_name = $_POST['book_name'];
    $genre = $_POST['genre'];
    $author = $_POST['author'];

    // Handle image upload
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = 'uploads/' . $image_name; // Adjust the path as needed
        move_uploaded_file($image_tmp, $image_path);
    }

    // Insert data into the database
    $sql = "INSERT INTO books (title, genre, author, image) VALUES ('$book_name', '$genre', '$author', '$image_path')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



