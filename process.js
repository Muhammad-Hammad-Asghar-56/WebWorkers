// Wait for the DOM content to be loaded before executing JavaScript
document.addEventListener("DOMContentLoaded", function() {
    // Get references to the buttons
    let btn1 = document.getElementById('btn1');
    let btn2 = document.getElementById('btn2');

    // Event listener for button 1 (Load Large Data)
    btn1.addEventListener('click', () => {
        // Create a new Web Worker instance
        const workObj = new Worker('worker.js');
        // Send a message to the Web Worker
        workObj.postMessage("Start Worker");
        // Handle message received from the Web Worker
        workObj.onmessage = function(e) {
            // Append the received data to the output area
            document.querySelector('#Output').innerHTML += e.data;
        }
    });

    // Event listener for button 2 (Print Hello)
    btn2.addEventListener('click', () => {
        // Append " Hi !" to the Hello element
        document.querySelector('#Hello').innerHTML += ' Hi !';
    });
});