<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('7df22bf6702e6c7e73a6d0cea73f68c4.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            }
      
header {
    background-color: transparent;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
    padding: 10px; 
    overflow: hidden;
}


.logo {
    float: left;
    padding-left: 50px;
}

.logo img {
    width: 70px; 
    height: auto;
    margin-right: 10px; 
}


.website-name {
    float: left; 
}

.website-name h1 {
    color: black; 
    font-family: 'Times New Roman', Times, serif;
    margin: 0; 
}

.search {
    float: left; /* Align the search form to the right */
    margin-top: 20px; /* Add some top margin for spacing */
}

.search form {
    margin-left: 200px; /* Add right margin to the form for spacing */
}

.search input[type="text"] {
    padding: 8px; /* Add padding to the input field */
    border: 1px solid #ccc; /* Add a border to the input field */
    border-radius: 5px; /* Add border radius for rounded corners */
}

.search button {
    padding: 8px 15px; /* Add padding to the button */
    background-color: #4CAF50; /* Set button background color */
    color: white; /* Set text color */
    border: none; /* Remove border */
    border-radius: 5px; /* Add border radius for rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover */
}

.search button:hover {
    background-color: #45a049; /* Change background color on hover */
}




nav ul {
    list-style-type: none; 
    margin: 0; 
    padding: 0; 
    float: right; 
}

nav ul li {
    display: inline; 
}

nav ul li a {
    display: inline-block; 
    color: white; 
    text-decoration: none; 
    padding: 10px 15px; 
}

nav ul li a:hover {
    background-color: purple; 
}

       

    .books {
        width: 200px;
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
        display: inline-block;
        vertical-align: top;
    }

    .books img {
        width: 100%;
        height: auto;
    }

    .books h2 {
        font-size: 18px;
        margin-top: 10px;
        margin-bottom: 5px;
    }

    .books p {
        font-size: 14px;
        color: black;
    }

    .details-button, .add-to-cart {
        display: inline-block;
        padding: 8px 75px;
        margin-top: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }

    .details-button:hover, .add-to-cart:hover {
        background-color: #45a049;
    }



    </style>
</head>

<body>
<header>
    <div class="logo">
        
        <img src="—Pngtree—mindset and mental health_14904757.png" alt="Aethermind">
    </div>
    <div class="website-name">
        <h1>Aethermind</h1>
    </div>

    <div class="search">
        <form method="GET" action="search.php">
        <input type="text" name="search" placeholder="Search products by name">
        <button type="submit">Search</button>
        </form>
    </div>

    <nav>
<ul>
    <li class="right"><a href="frontpage.php">Home</a></li>
</ul>

    </nav>
</header>


<div class="main">
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
      
          // Fetch and display products
          if (isset($_GET['search'])) {
            $searchQuery = $_GET['search'];
        
            // Fetch and display products based on the search query
            $sql = "SELECT * FROM books WHERE title LIKE '%$searchQuery%'";
        } else {
            // Fetch and display all products if no search query is provided
            $sql = "SELECT * FROM books";
        }
        $result = $conn->query($sql);
      
         // Display products in a grid layout
         if ($result->num_rows > 0) {
             while ($row = $result->fetch_assoc()) {
                echo '<div class="books">';
                echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
                echo '<h2>' . $row['title'] . '</h2>';
                echo '<p>' . $row['genre'] . '</p>';
                echo '<a href="detail_books.php?id=' . $row['bid'] . '" class="details-button">Details</a>';
               
                echo '</div>';

             }
         } else {
             echo 'No books available.';
         }
 

       $conn->close();
      ?>

    </div>


</body>
</html>
