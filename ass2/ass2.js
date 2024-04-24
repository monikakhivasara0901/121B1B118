// function formValidation()
// {
//     var uid = document.getElementById("userid");
//     var passid = document.getElementById("pass");
//     var uname = document.getElementById("full-name");
//     var uadd = document.getElementById("address");
//     var passToggleBtn = document.getElementById("pass-toggle-btn");
// if(userid_validation(uid,5,12))
// {
// if(passid_validation(passid,7,12))
// {
// if(allLetter(uname))
// {
// if(alphanumeric(uadd))
// { 
//     return true;
// }
// }
// }
// }
// return false;
// }


// function userid_validation(uid,mx,my)
// {
// var uid_len = uid.value.length;
// if (uid_len == 0 || uid_len >= my || uid_len < mx)
// {
// alert("User Id should not be empty / length be between "+mx+" to "+my);
// uid.focus();
// return false;
// }
// return true;
// }
// function passid_validation(passid,mx,my)
// {
// var passid_len = passid.value.length;
// if (passid_len == 0 ||passid_len >= my || passid_len < mx)
// {
// alert("Password should not be empty / length be between "+mx+" to "+my);
// passid.focus();
// return false;
// }
// return true;
// }
// function allLetter(uname)
// { 
// var letters = /^[A-Za-z]+$/;
// if(uname.value.match(letters))
// {
// return true;
// }
// else
// {
// alert('Username must have alphabet characters only');
// uname.focus();
// return false;
// }
// }
// function alphanumeric(uadd)
// { 
// var letters = /^[0-9a-zA-Z]+$/;
// if(uadd.value.match(letters))
// {
// return true;
// }
// else
// {
// alert('User address must have alphanumeric characters only');
// uadd.focus();
// return false;
// }
// }

// // Toggling password visibility
// // Toggling password visibility
// passToggleBtn.addEventListener('click', () => {
//     passToggleBtn.className = passid.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
//     passid.type = passid.type === "password" ? "text" : "password";
// });   

// JavaScript code for form validation and password toggle

function formValidation() {
    var uid = document.getElementById("userid");
    var passid = document.getElementById("pass");
    var uname = document.getElementById("full-name");
    var uadd = document.getElementById("address");

    if (userid_validation(uid, 5, 12)) {
        if (passid_validation(passid, 7, 12)) {
            if (allLetter(uname)) {
                if (alphanumeric(uadd)) {
                    return true;
                }
            }
        }
    }
    return false;
}

function userid_validation(uid, mx, my) {
    var uid_len = uid.value.length;
    if (uid_len == 0 || uid_len >= my || uid_len < mx) {
        alert("User Id should not be empty / length be between " + mx + " to " + my);
        uid.focus();
        return false;
    }
    return true;
}

function passid_validation(passid, mx, my) {
    var passid_len = passid.value.length;
    if (passid_len == 0 || passid_len >= my || passid_len < mx) {
        alert("Password should not be empty / length be between " + mx + " to " + my);
        passid.focus();
        return false;
    }
    return true;
}

function allLetter(uname) {
    var letters = /^[A-Za-z]+$/;
    if (uname.value.match(letters)) {
        return true;
    } else {
        alert('Username must have alphabet characters only');
        uname.focus();
        return false;
    }
}

function alphanumeric(uadd) {
    var letters = /^[0-9a-zA-Z]+$/;
    if (uadd.value.match(letters)) {
        return true;
    } else {
        alert('User address must have alphanumeric characters only');
        uadd.focus();
        return false;
    }
}

// // Toggling password visibility
// var passToggleBtn = document.getElementById("pass-toggle-btn");
// var passid = document.getElementById("pass");

// passToggleBtn.addEventListener('click', () => {
//     passToggleBtn.className = passid.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
//     passid.type = passid.type === "password" ? "text" : "password";
// });
