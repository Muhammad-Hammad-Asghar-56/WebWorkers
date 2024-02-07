self.onmessage = function(event) {
    // Initialize a variable to store the result
    let result = 0;

    // Loop through a large number of iterations
    for (let i = 0; i < 10000000000; i++) {
        // Increment the result by the current iteration value
        result += i;  
    }

    // Once the loop completes, post the result back to the main thread
    self.postMessage(result);
};
