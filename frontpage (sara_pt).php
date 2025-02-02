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
                        <a href="editpro.php">Edit Profile</a>
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

    <div class="dialogue-box">
        <h2>Let's Get to Know You</h2>
        <form>
            <div class="input-container">
                <label for="question1">What's your age?</label>
                <input type="text" id="question1" name="question1">
            </div>

            <div class="input-container">
                <label for="question2">What's your gender?</label>
                <input type="text" id="question2" name="question2">
            </div>

            <div class="input-container">
                <label for="question3">Do you have any previous experiences regarding mental health?</label>
                <input type="text" id="question3" name="question3">
                <select id="dropdown3" class="hidden" name="dropdown3" onchange="setValue('question3', this.value)">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="maybe">Maybe</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question4">How Often do you have mood swings?</label>
                <input type="text" id="question4" name="question4">
                <select id="dropdown4" class="hidden" name="dropdown4" onchange="setValue('question4', this.value)">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="maybe">Maybe</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question5">Are you sad right now?</label>
                <input type="text" id="question5" name="question5">
                <select id="dropdown5" class="hidden" name="dropdown5" onchange="setValue('question5', this.value)">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="maybe">Maybe</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question6">What's your anxiety level?</label>
                <input type="text" id="question6" name="question6">
                <select id="dropdown6" class="hidden" name="dropdown6" onchange="setValue('question6', this.value)">
                    <option value="">Select a level</option>
                    <?php for ($i = 0; $i <= 10; $i++) { echo "<option value='$i'>$i</option>"; } ?>
                </select>
            </div>

            <div class="input-container">
                <label for="question7">How many hours do you get sleep in a day?</label>
                <input type="text" id="question7" name="question7">
            </div>

            <div class="input-container">
                <label for="question8">Rate your Social support from 1 to 10?</label>
                <input type="text" id="question8" name="question8">
                <select id="dropdown8" class="hidden" name="dropdown8" onchange="setValue('question8', this.value)">
                    <option value="">Select a rating</option>
                    <?php for ($i = 1; $i <= 10; $i++) { echo "<option value='$i'>$i</option>"; } ?>
                </select>
            </div>

            <div class="input-container">
                <label for="question9">Do you get enough family support?</label>
                <input type="text" id="question9" name="question9">
                <select id="dropdown9" class="hidden" name="dropdown9" onchange="setValue('question9', this.value)">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="maybe">Maybe</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question10">What's your relationship status?</label>
                <input type="text" id="question10" name="question10">
                <select id="dropdown10" class="hidden" name="dropdown10" onchange="setValue('question10', this.value)">
                    <option value="">Select a status</option>
                    <option value="single">Single</option>
                    <option value="committed">Committed</option>
                    <option value="married">Married</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question11">What's your BMI?</label>
                <input type="text" id="question11" name="question11">
                <select id="dropdown11" class="hidden" name="dropdown11" onchange="setValue('question11', this.value)">
                    <option value="">Select a category</option>
                    <option value="normal">Normal weight</option>
                    <option value="overweight">Overweight</option>
                    <option value="underweight">Underweight</option>
                    <option value="obesity">Obesity</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question12">What's your salary rate?</label>
                <input type="text" id="question12" name="question12">
            </div>

            <div class="input-container">
                <label for="question13">What's your Occupation?</label>
                <input type="text" id="question13" name="question13">
            </div>

            <div class="input-container">
                <label for="question14">How often do you get depressed in a week?</label>
                <input type="text" id="question14" name="question14">
                <select id="dropdown14" class="hidden" name="dropdown14" onchange="setValue('question14', this.value)">
                    <option value="">Select an option</option>
                    <option value="thrice or quarce">Thrice or Quarce</option>
                    <option value="daily">Daily</option>
                    <option value="once or twice">Once or Twice</option>
                    <option value="never">Never</option>
                    <option value="quince or sence">Quince or Sence</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question15">Do you reside with your family?</label>
                <input type="text" id="question15" name="question15">
                <select id="dropdown15" class="hidden" name="dropdown15" onchange="setValue('question15', this.value)">
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question16">What's your personality type?</label>
                <input type="text" id="question16" name="question16">
                <select id="dropdown16" class="hidden" name="dropdown16" onchange="setValue('question16', this.value)">
                    <option value="">Select a type</option>
                    <option value="ambivert">Ambivert</option>
                    <option value="introvert">Introvert</option>
                    <option value="extrovert">Extrovert</option>
                </select>
            </div>

            <div class="input-container">
                <label for="question17">Where do you live?</label>
                <input type="text" id="question17" name="question17">
            </div>
            
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

<script>
    function showDropdown(id) {
        document.getElementById(id).classList.toggle('hidden');
    }

    function setValue(inputId, value) {
        document.getElementById(inputId).value = value;
        document.getElementById('dropdown' + inputId.slice(-1)).classList.add('hidden');
    }

    document.querySelectorAll('input[type="text"]').forEach(input => {
        input.addEventListener('focus', function() {
            const select = this.nextElementSibling;
            if (select && select.tagName === 'SELECT') {
                select.classList.remove('hidden');
            }
        });
    });
</script>

</body>
</html>
