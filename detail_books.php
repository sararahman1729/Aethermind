<?php
session_start(); // Start the session
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'aethermind';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get book_id from URL parameter
if (isset($_GET['bid']) && !empty($_GET['bid'])) { // Check if bid is set and not empty
    $bid = $_GET['bid'];

    // Fetch product details
    $sql = "SELECT * FROM books WHERE bid = $bid";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $books = $result->fetch_assoc();
    } else {
        echo 'Book not found.';
        exit;
    }
} else {
    echo 'Invalid book ID.';
    exit;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $books['title']; ?> Details</title>
    
</head>
<body>
    <div class="box">
        <br><h2><?php echo $books['title']; ?></h2><br><br><br>
        <div class="images">
            <img src="<?php echo $books['image']; ?>" alt="Image 1">
            
        </div><br><br><br>
        <p>Title : <?php echo $books['title']; ?></p>
        <p>Genre : <?php echo $books['genre']; ?></p>
        <p>Auther : <?php echo $books['author']; ?></p>
        <p>Description : <?php echo $books['description']; ?></p>
        
        
        <div class="buttons">
            <a href="books.php" class="home-button">Back</a><br><br>
           
        </div>
    </div>

</body>
</html>
