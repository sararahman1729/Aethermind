<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    
    <link rel ="stylesheet" href="frontpage.css">

    
</head>
<body>

<header>
    <div class="logo">
       
        <img src="—Pngtree—mindset and mental health_14904757.png" alt="Aethermind">
    </div>
    <div class="website-name">
        <h1>Aethermind</h1>
    </div>
    <nav>
        <ul>
            <li><a href="frontpage.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="sports.php">Sports</a></li>
          
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Profile</button>
                    <div class="dropdown-content">
                        <a href="userprofile.php">Profile</a>
                        <a href="logout.php">Logout</a>
                       
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>

<main>
    
 
    <div class="tasks">
        
        <h2>Daily Tasks</h2>
        <ul>
            <?php
            
            $tasks = array(
                "Go for a walk",
                "Read a book",
                "Practice meditation",
                "Write in a journal",
                "Draw something",
            );

           
            shuffle($tasks);

           
            $randomTasks = array_slice($tasks, 0, 3);

            
            foreach ($randomTasks as $task) {
                echo "<li>$task</li>";
            }
            ?>
        </ul>
    </div>

    <div class="drawing">
        <h3> We have a solution to relief your stress </h3>

    <form action="stress_game.php" method="post">
        

        <button type="submit">Let's go</button>

    </form>

    </div>

    <div class="dialogue-box">
        
        <h2>Let's Get to Know You</h2>
        
        <form>
            <label for="question1">How's your mood today?</label>
            <input type="text" id="question1" name="question1">
            <label for="question1">What did you eat today?</label>
            <input type="text" id="question1" name="question1">
            <label for="question1">Have you had a bad day today?</label>
            <input type="text" id="question1" name="question1">
            
            <button type="submit">Submit</button>
        </form>
    </div>
</main>

<footer>
    <div class="quotes">
        
        <h2>Daily Quotes</h2>
        <?php
        
        $quotes = array(
            "Always be yourself and have faith in yourself. Do not go out and lookfor a successful personality and tries to duplicate it. - Bruce Lee",
            "As soon as you trust yourself, you will know how to live. - Johann Wolfgang von Goethe",
            "If we all did the things we are capable of doing, we would literally astound ourselves. - Thomas Alva Edison",
            "Trust yourself. You know more than you think you do. - Dr. Benjamin Spock",
            "Always remember you are braver than you believe, stronger than you seem, and smarter than you think. - Christopher Robin",
        );

        $randomIndex = array_rand($quotes);
        $randomQuote = $quotes[$randomIndex];
        echo "<p>$randomQuote</p>";
        ?>
    </div>
</footer>

</body>
</html>
