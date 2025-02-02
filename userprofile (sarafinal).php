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
            background-image: url('420198859_3359079664389138_6936018216047622693_n.jpg');
            background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
        }

        header {
            background-color: transparent;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
    color: black;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'Times New Roman', Times, serif;
    font-size: large;
}

header img {
    max-width: 100px;
}

header h1 {
    margin: 0;
    font-size: 1.5em;
    margin-left: 10px; 
    color: black;

}

        header a {
            color: black;
            text-decoration: none;
        }
        .container {
            max-width: 800px; 
            margin: 20px auto 90px; 
            background-color: rgba(255, 192, 203, 0.5);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
            padding: 120px;
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            display: flex;
            justify-content: space-between;
            align-items: flex-start; 
            flex-wrap: wrap; 
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
        .edit-button {
            margin-top: auto; /* Push the button to the bottom */
            align-self: flex-start; /* Align button to the left */
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
            <a href="/">Front Page</a>
        
    </header>
   
    <div class="container">
        <div class="profile-info">
            <h2>User Information</h2>
            <img src="userimage.jpg" alt="User img">
            <p><strong>Name:</strong> Sara </p>
            <p><strong>Username:</strong> sara1729</p>
            <p><strong>ID:</strong> 2115 </p>
            <p><strong>Mental Score:</strong> 4 </p>
        </div>
        <div class="gap"></div>
        <div class="task-completion">
            <h2>Task Completion</h2>
<?php
// need database connection with the task table
// here need connection with model training and connection with the history page to store the tasks that are selected
$tasks = array(
    "Watch Anime Haikyuu",
    "Do read Little Women",
    "Watch the movie- The Prestige",
    "Spend some times with your family",
    "Watch The series- Stranger Things",
   
);

shuffle($tasks);
$selectedTasks = array_slice($tasks, 0, 3);

foreach ($selectedTasks as $task) {
    echo "<div class='checkbox'>";
    echo "<input type='checkbox' id='task' name='task[]' value='$task'>";
    echo "<label for='task'>$task</label>";
    echo "</div>";
}
?>


        </div>
        
        <button class="edit-button">Edit Profile</button>
    </div>

    <script>
    
    window.onload = function() {
        //need database connection here
        var mental_score = "<?php echo $mental_score; ?>";
        if (mental_score > 5) {
        
            var choice = confirm("You need to consult with a doctor. Choose an option:\n\n1. OK - Proceed to consultation page\n2. Not Now - Stay on this page");
            // Redirect to consultation page if user clicks OK
            if (choice) {
                window.location.href = "consultation_page.php"; 
            } else {
                // if user clicks "Not Now" action (optional)
                alert("Okay, we'll remind you later."); 
            }
        }
    };
</script>

</body>
</html>