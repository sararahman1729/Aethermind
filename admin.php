<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
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

       
    .main {
        background-color: transparent;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
        padding: 80px; 
        margin: 20px auto; 
        border-radius: 10px; 
        max-width: 600px; 

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
    <li class="right"><a href="movies_admin.php">Movies</a></li>
    <li class="right"><a href="books_admin.php">Books</a></li>
    <li class="right"><a href="sports_admin.php">Sports</a></li>
</ul>

    </nav>
</header>


<div class="main">
    <h2>Rules and Regulations</h2>
    <p>Some rules and regulations for the admin panel.</p>
    <p>Admin can add, update, delete movies, books, sports, etc.</p>
    <p>Also have access to some fields.</p>
</div>

</body>
</html>
