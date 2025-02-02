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
    <nav>
<ul>
    <li class="right"><a href="addbooks.php">+ Addbooks</a></li>
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
          $sql = "SELECT * FROM books";
          $result = $conn->query($sql);
      
         // Display products in a grid layout
         if ($result->num_rows > 0) {
             while ($row = $result->fetch_assoc()) {
                echo '<div class="books">';
                echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
                echo '<h2>' . $row['title'] . '</h2>';
                echo '<p>' . $row['description'] . '</p>';
                echo '<a href="books_details.php?id=' . $row['bid'] . '" class="details-button">Details</a>';
                echo '<div>';
                echo '<button class="add-to-cart" onclick="editbooks(\'' . $row['bid'] . '\')">Edit</button>';
                echo '</div>';

                echo '<div>';
                echo '<button class="add-to-cart" onclick="deletebooks(\'' . $row['bid'] . '\')">Delete</button>';
                echo '</div>';
                echo '</div>';

             }
         } else {
             echo 'No books available.';
         }
 

       $conn->close();
      ?>

    </div>
    <!-- Add this JavaScript code within your HTML file -->
   <!-- Add this JavaScript code within your HTML file -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function editbooks(bid) {
    window.location.href = 'editbooks.php?id=' + bid;
}

function deletebooks(bid) {
    // Display the confirmation dialog
    if (confirm('Are you sure you want to delete this product?')) {
        // If the user confirms, proceed with the deletion
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Product deleted successfully
                    alert('Book deleted successfully.');
                    window.location.reload(); // Reload the page to reflect changes
                } else {
                    // Error occurred while deleting the book
                    alert('Error deleting the book: ' + xhr.statusText);
                }
            }
        };
        
        xhr.open('POST', 'delete_books.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('bid=' + bid);
    }
}
</script>


</body>
</html>
