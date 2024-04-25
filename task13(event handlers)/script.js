// Click Event Handler
function handleClick() {
    var button = document.getElementById("myButton");
    button.style.backgroundColor = "red";
    button.textContent = "Clicked!";
}

// Keydown Event Handler
function handleKeydown(event) {
    alert("You typed: " + event.key);
}

// Submit Event Handler
// Submit Event Handler
function handleSubmit(event) {
    event.preventDefault(); // Prevent form submission
    var formData = new FormData(event.target);
    console.log("Form data:", formData);
    
    // Redirect to another page
    window.location.href = "next-page.html";
}

// Adding event listeners
document.getElementById("myButton").addEventListener("click", handleClick);
document.getElementById("textInput").addEventListener("keydown", handleKeydown);
document.getElementById("myForm").addEventListener("submit", handleSubmit);
