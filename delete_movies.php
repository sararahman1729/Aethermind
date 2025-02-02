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

// Check if the product ID is provided via POST or GET (you should validate and sanitize the input)
$mid = isset($_POST['mid']) ? $_POST['mid'] : $_GET['mid'];

// Perform the delete operation
$sql = "DELETE FROM movies WHERE mid = $mid";

if ($conn->query($sql) === TRUE) {
    // Movie deleted successfully
    header('Location: admin.php');
    exit();
} else {
    // Error occurred while deleting the movie
    echo "Error: " . $conn->error;
}

$conn->close();
?>
