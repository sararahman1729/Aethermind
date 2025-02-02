<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stress Relief Coloring</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('438305745_435711722408309_5381786559385663983_n.jpg'); 
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

    header {
      background-color: rgba(135, 206, 235, 0.5);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
    color: black;
            padding: 10px 20px;
            display: flex;
          
            align-items: center;
            margin-bottom: 20px;
            font-family: 'Times New Roman', Times, serif;
        }
        header img {
            max-width: 100px;
        }
        header h1 {
            margin: 0;
            font-size: 2.0em;
            margin-left: 10px;
        }

        header a {
            color: #fff;
            text-decoration: none;
        }

        header h2{
          padding-left:100px;
        }
    #promptSection {
      text-align: center;
      margin-bottom: 20px;
      margin-left: 350px;
      margin-right: 350px;
      padding-top: 20px;
      padding-bottom: 20px;
      background-color: rgba(60, 145, 195, 0.5);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
    }

    #coloringCanvas {
  border: 1px solid #000;
  display: block;
  margin: 0 auto;
  background-color: #fff; 
  
}


    #colorPalette {
      text-align: center;
      padding-top: 20px;
      padding-bottom: 20px;
      margin-top: 10px;
      margin-left: 400px;
      margin-right: 400px;
     
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
    background-color: rgba(255, 255, 255, 0.5);
    }

    .color {
      display: inline-block;
      width: 30px;
      height: 30px;
      border: 1px solid #000;
      margin: 0 5px;
      cursor: pointer;
    }

    #eraserButton {
      display: inline-block;
      margin-top: 10px;
      padding: 5px 10px;
      margin-left: 400px;
      margin-right: 500px;
      margin-bottom: 50px;
      cursor: pointer;
      border: 1px solid #000;
      border-radius: 5px;
    }
  
  </style>
</head>
<body>
  <header>
    <img src="—Pngtree—mindset and mental health_14904757.png" alt="Logo">
    <h1>Aethermind</h1>
    <h2>Life is a painting, and you are the artist</h2>
  </header>

  <div id="promptSection">
    <h2>Prompt:</h2>
    <p id="promptText"></p>
  </div>

  <canvas id="coloringCanvas" width="400" height="400"></canvas>
  <div id="colorPalette">
    <div class="color" style="background-color: red;"></div>
    <div class="color" style="background-color: blue;"></div>
    <div class="color" style="background-color: green;"></div>
    <div class="color" style="background-color: pink;"></div>
    <div class="color" style="background-color: orange;"></div>
    <div class="color" style="background-color: brown;"></div>
  </div>

  <button id="eraserButton">Eraser</button>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const canvas = document.getElementById("coloringCanvas");
      const context = canvas.getContext("2d");

      const colors = ["red", "blue", "green", "pink", "orange", "brown"]; 
      let currentColor = colors[0];

      function setColor(color) {
        currentColor = color;
      }

      function draw(event) {
        if (event.buttons !== 1) return;
        const x = event.offsetX;
        const y = event.offsetY;

        context.fillStyle = currentColor;
        context.fillRect(x, y, 10, 10);

        document.getElementById("promptText").textContent = "Well done! You've made a good start. Keep trying until you achieve your goal.";
      }

      canvas.addEventListener("mousemove", draw);
      canvas.addEventListener("mousedown", draw);

      const colorPalette = document.getElementById("colorPalette");
      colorPalette.addEventListener("click", function(event) {
        if (event.target.classList.contains("color")) {
          const selectedColor = event.target.style.backgroundColor;
          setColor(selectedColor);
        }
      });

      const eraserButton = document.getElementById("eraserButton");
      eraserButton.addEventListener("click", function() {
        alert("It's okay dear to make mistakes, and you know you can't erase your past mistakes, but what you can do is you can create something more beautiful with having your mistakes, because having the imperfections is the actual beauty.");
      });

      // Prompt messages array
      const promptMessages = [
        "Draw a calming nature scene.",
        "Sketch a peaceful beach at sunset.",
        "Create a serene mountain landscape.",
        "Illustrate a tranquil forest with a stream.",
        "Depict a quiet meadow with wildflowers.",
        "Paint a calming lake with reflections."
      ];

      // Function to get a random message
      function getRandomPrompt(array) {
        const randomIndex = Math.floor(Math.random() * array.length);
        return array[randomIndex];
      }

      // Set a random prompt message
      const randomPrompt = getRandomPrompt(promptMessages);
      document.getElementById("promptText").textContent = randomPrompt;
    });
  </script>
</body>
