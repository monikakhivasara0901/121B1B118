// File: client_cookies.js
// Contains JavaScript functions for creating and retrieving cookies on the client-side

// Set a cookie with a specified name, value, and expiration date
function setCookie() {
    var name = "username";
    var value = "john_doe";
    var days = 7; // Expires in 7 days
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
    alert("Cookie set successfully!");
}

// Get the value of a cookie by its name
function getCookie() {
    var name = "username";
    var nameEQ = name + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) == 0) {
            var cookieValue = cookie.substring(nameEQ.length, cookie.length);
            document.getElementById("cookieValue").innerText = "Cookie Value: " + cookieValue;
            return;
        }
    }
    document.getElementById("cookieValue").innerText = "Cookie not found.";
}
