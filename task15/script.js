function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username.trim() === "" || password.trim() === "") {
        alert("Username and password are required.");
        return false;
    }

    // You can add more validation rules here if needed

    return true;
}
