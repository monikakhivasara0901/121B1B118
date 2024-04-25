var firstNameInput = document.getElementById("txtfname");
var middleNameInput = document.getElementById("txtmname");
var lastNameInput = document.getElementById("txtlname");
var passwordInput = document.getElementById("txtpwd");

firstNameInput.addEventListener("input", validateFirstName);
middleNameInput.addEventListener("input", validateMiddleName);
lastNameInput.addEventListener("input", validateLastName);
passwordInput.addEventListener("input", validatePassword);

function validateFirstName() {
    var firstName = firstNameInput.value.trim();
    var firstNameError = document.getElementById("firstNameError");

    if (firstName === "") {
        firstNameError.innerHTML = "First name is required";
    } else {
        firstNameError.innerHTML = "";
    }
}

function validateMiddleName() {
    var middleName = middleNameInput.value.trim();
    var middleNameError = document.getElementById("middleNameError");

    if (middleName === "" && firstNameInput.value.trim() !== "") {
        middleNameError.innerHTML = "Middle name is required";
    } else {
        middleNameError.innerHTML = "";
    }
}

function validateLastName() {
    var lastName = lastNameInput.value.trim();
    var lastNameError = document.getElementById("lastNameError");

    if (lastName === "") {
        lastNameError.innerHTML = "Last name is required";
    } else {
        lastNameError.innerHTML = "";
    }
}

function validatePassword() {
    var password = passwordInput.value.trim();
    var passwordError = document.getElementById("passwordError");

    if (password === "") {
        passwordError.innerHTML = "Password is required";
    } else if (password.length < 6) {
        passwordError.innerHTML = "Password must be at least 6 characters long";
    } else {
        passwordError.innerHTML = "";
    }
}

document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting
    // Call all validation functions to ensure all fields are validated before submission
    validateFirstName();
    validateMiddleName();
    validateLastName();
    validatePassword();
});
