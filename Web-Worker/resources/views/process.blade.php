<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Worker Example</title>
    <!-- Linking Tailwind CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <!-- Container for the application -->
    <div class="bg-white rounded-lg shadow-md p-8 max-w-md w-full">
        <!-- Main heading -->
        <h1 class="text-3xl  mb-4">Web Worker App</h1>
        <!-- Output area for messages -->
        <h2 id="Hello" class="text-lg mb-2"></h2>
        <h2 id="Output" class="text-lg mb-4"></h2>
        <!-- Button to trigger loading of large data -->
        <button id="btn1" class="bg-blue-500 hover:bg-blue-700 text-white  py-2 px-4 rounded mr-2">Load Large Data</button>
        <!-- Button to print "Hi!" in the output area -->
        <button id="btn2" class="bg-red-500 hover:bg-red-700 text-white  py-2 px-4 rounded">Print Hello</button>
    </div>

    <!-- External JavaScript file for processing -->
    <script src="./process.js"></script>
    <!-- JavaScript code for event handling -->
    <script>
    // Wait for the DOM content to be loaded before executing JavaScript
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to the buttons
        let btn1 = document.getElementById('btn1');
        let btn2 = document.getElementById('btn2');

        // Event listener for button 1 (Load Large Data)
        btn1.addEventListener('click', () => {
            // Log that button 1 is clicked
            console.log("Button 1 clicked");
            // Create a new Web Worker instance
            const workObj = new Worker('worker.js');
            // Send a message to the Web Worker
            workObj.postMessage("Start Worker");
            // Handle message received from the Web Worker
            workObj.onmessage = function(e) {
                // Update the output area with the received data
                document.querySelector('#Output').innerHTML = e.data;
            }
        });

        // Event listener for button 2 (Print Hello)
        btn2.addEventListener('click', () => {
            // Log that button 2 is clicked
            console.log("Button 2 clicked");
            // Append "Hi!" to the output area
            document.querySelector('#Hello').innerHTML += 'Hi!';
        });
    });
</script>
</body>
</html>
