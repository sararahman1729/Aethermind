<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('434471102_3240120906295940_8745634809280327762_n.jpg');
            background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
        }

        header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header img {
    max-width: 100px;
}

header h1 {
    margin: 0;
    font-size: 1.5em;
    margin-left: 10px; /* Added margin to separate logo and text */
}

        header a {
            color: #fff;
            text-decoration: none;
        }
        .container {
            max-width: 800px; /* Adjust as needed */
            margin: 20px auto 90px; /* Adjusted margin */
            background-image: linear-gradient(rgb(241, 201, 208),rgb(222, 160, 222),rgb(252, 170, 231),rgb(181, 219, 234),rgb(195, 148, 195)); 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
            padding: 120px;
            border-radius: 10px; /* Added border radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Added box shadow */
            display: flex;
            justify-content: space-between;
            align-items: flex-start; /* Align items to the top */
            flex-wrap: wrap; /* Allow flex items to wrap */
        }
        .profile-info {
            flex: 1 1 300px; /* Set flex-grow, flex-shrink, and flex-basis */
            padding: 20px;
        }
        .profile-info img {
            max-width: 100px;
            border-radius: 50%;
        }
        .profile-info h2 {
            margin-top: 0;
        }
        .task-completion {
            flex: 1 1 300px; /* Set flex-grow, flex-shrink, and flex-basis */
            padding: 20px; /* Added padding */
        }
        
        .checkbox {
            margin-bottom: 10px;
        }
        .gap {
            flex-basis: 40px;
        }
    </style>
</head>
<body>
    <header>
        
            <img src="—Pngtree—mindset and mental health_14904757.png" alt="Logo">
            <h1>Aethermind</h1>
            <a href="editpro.php">Edit profile</a>
            <a href="frontpage.php">Home</a>
        
    </header>
    <div class="container">
        <div class="profile-info">
            <h2>User Information</h2>
            <img src="userimage.jpg" alt="User img">
            <p><strong>Name:</strong> Sara </p>
            <p><strong>Username:</strong> sara1729</p>
            <p><strong>ID:</strong> 2115 </p>
            <p><strong>Mood:</strong> sad </p>
        </div>
        <div class="gap"></div>
        <div class="task-completion">
            <h2>Task to Complete</h2>
            <?php
// List of tasks
$tasks = array(
    "Watch a movie",
    "Go for a walk",
    "Spend time with your friends",
    "Read a book that will inspire you",
    "Go to field and play any sport you like or watch a play live",
    // Add more tasks as needed
);

// Shuffle the array to randomize the order of tasks
shuffle($tasks);

// Select the first three tasks from the shuffled array
$selectedTasks = array_slice($tasks, 0, 3);

// Display the selected tasks
foreach ($selectedTasks as $task) {
    echo "<div class='checkbox'>";
    echo "<input type='checkbox' id='task' name='task[]' value='$task'>";
    echo "<label for='task'>$task</label>";
    echo "</div>";
}
?>

        </div>
       
    </div>

    <script>
    // JavaScript code to show popup dialog
    window.onload = function() {
        var mood = "<?php echo $mood; ?>";
        if (mood === "sad") {
            // Show custom confirm dialog
            var choice = confirm("You need to consult with a doctor. Choose an option:\n\n1. OK - Proceed to consultation page\n2. Not Now - Stay on this page");

            // Redirect to consultation page if user clicks OK
            if (choice) {
                window.location.href = "consultation_page.php"; // Replace "consultation_page.php" with the actual URL of the consultation page
            } else {
                // Handle "Not Now" action (optional)
                // You can add your logic here to perform any action if the user chooses "Not Now"
                alert("Okay, we'll remind you later."); // Example alert message
            }
        }
    };
</script>

<?php
// Establish a database connection (replace 'localhost', 'username', 'password', and 'database_name' with your actual database credentials)
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to fetch data
$sql = "SELECT * FROM users WHERE username = 'sara1729'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<img src='userimage.jpg' alt='User img'>";
        echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
        echo "<p><strong>Username:</strong> " . $row["username"] . "</p>";
        echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
    }
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>


</body>
</html>