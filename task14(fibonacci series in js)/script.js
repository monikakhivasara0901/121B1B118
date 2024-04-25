// Function to generate Fibonacci series
function generateFibonacci(n) {
    var fibonacciSeries = [];
    var a = 0, b = 1;

    for (var i = 0; i < n; i++) {
        fibonacciSeries.push(a);
        var temp = a;
        a = b;
        b = temp + b;
    }

    return fibonacciSeries;
}

// Function to generate and display Fibonacci series
function generateAndDisplay() {
    var fibonacciCountInput = document.getElementById("fibonacciCount");
    var n = parseInt(fibonacciCountInput.value);

    // Generate Fibonacci series
    var fibonacciSeries = generateFibonacci(n);

    // Display Fibonacci series on the next line
    var fibonacciOutput = document.getElementById("fibonacciOutput");
    fibonacciOutput.textContent = fibonacciSeries.join(", ");
}
