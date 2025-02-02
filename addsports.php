<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Sports</title>
  <style>
    body {
        background-image: url('sports-football-field-night-light-goal-grayscale-photo-of-soccer-goal-wallpaper-thumb.jpg');
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    }
   

    header {
     
        background-image: linear-gradient(135deg, rgb(100, 108, 110),#2b4169, #615a9e, rgb(186, 174, 186));
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
      color: white;
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
      color: white;
    }
    header h1 {
      margin: 0;
      font-size: 34px;
      padding-left: 20px;
      color: white;
    }

    header img {
      height: 60px;
      width:auto;
      vertical-align: middle;
    }
   
   

    .container {
        background-color: rgba(255, 255, 255, 0.5);
        /* background-color: transparent; */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
      margin: 20px auto;
      width: 80%;
    }
    form {
      border: 2px solid #ccc;
      padding: 20px;
      margin-top: 70px;
      border-radius: 5px;
      background-color: transparent;
      text-shadow:  0 2px 4px rgba(0, 0, 0, 0.5);
      color:black;
      
    }
    form label {
    margin-bottom: 15px; 
    padding-bottom: 50px;
    color: white; 
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
      background-color: grey;
    }
  </style>
</head>
<body>
<header>
    <img src="—Pngtree—mindset and mental health_14904757.png" alt="Logo">
    <h1>Aethermind</h1>
    <h2>Add New Sports Here</h2>
</header>
  <div class="container">
    <form action="#" method="POST" enctype="multipart/form-data">
      <label for="Sports_name">Sports Name:</label>
      <input type="text" id="Sports_name" name="Sports_name" required>
      <label for="Sports_type">Sports Type:</label>
      <input type="text" id="Sports_name" name="Sports_name" required>
      <label for="image">Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>

