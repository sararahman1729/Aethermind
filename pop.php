<!DOCTYPE html>
<html>
<head>
    <title>Pop-up Dialogue Box</title>
</head>
<body>

<?php
// Note message
$note = "you may beed to consult any doctor or counsilor. We can help you doing that";

// Button text
$buttonText = "Find Location";

// JavaScript to display the dialogue box and perform action on button click
echo "<script>
    // Create a div element for the dialogue box
    var dialogBox = document.createElement('div');
    
    // Style the dialogue box
    dialogBox.style.position = 'fixed';
    dialogBox.style.bottom = '0';
    dialogBox.style.left = '0';
    dialogBox.style.width = '100%';
    dialogBox.style.backgroundColor = '#f4f4f4';
    dialogBox.style.padding = '20px';
    dialogBox.style.textAlign = 'center';
    dialogBox.style.boxShadow = '0px -2px 10px rgba(0, 0, 0, 0.2)';
    
    // Add note message to the dialogue box
    var note = document.createTextNode('$note');
    dialogBox.appendChild(note);
    
    // Add a button to close the dialogue box
    var closeButton = document.createElement('button');
    closeButton.innerHTML = '$buttonText';
    closeButton.style.marginLeft = '20px';
    closeButton.style.padding = '8px 20px';
    closeButton.style.backgroundColor = '#007bff';
    closeButton.style.color = 'white';
    closeButton.style.border = 'none';
    closeButton.style.borderRadius = '5px';
    closeButton.style.cursor = 'pointer';
    
    // Function to be executed when the button is clicked
    function performAction() {
        // Add your action here, for example:
        alert('Button clicked! This is where you perform your action.');
    }
    
    // Call the performAction function when the button is clicked
    closeButton.onclick = function() {
        performAction();
        dialogBox.style.display = 'Archive\index.html'; // Hide the dialogue box
    };
    
    // Add the close button to the dialogue box
    dialogBox.appendChild(closeButton);
    
    // Add the dialogue box to the body of the HTML document
    document.body.appendChild(dialogBox);
</script>";
?>

</body>
</html>
