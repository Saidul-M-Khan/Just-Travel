// Validate Full Name
function WordCount(str) {
    return str.split(' ')
        .filter(function(n) {
            return n != ''
        })
        .length;
}

String.prototype.stripSlashes = function() {
    return this.replace(/\\(.)/mg, "$1");
}

function escapeHtml(text) {
    var map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };

    return text.replace(/[&<>"']/g, function(m) {
        return map[m];
    });
}

function validateInput(information) {
    var information = information.trim();
    var information = information.stripSlashes();
    var information = escapeHtml(information);
    return information;
}

function validateName(nameValue) {
    // let nameValue = document.getElementById('name').value;
    var Error = document.getElementById('nameOutput');
    var str_word_count = WordCount(nameValue);
    if (nameValue == "") {
        Error.innerHTML = "";
    } else {
        let Name = validateInput(nameValue);
        if (!Name.match(/^[a-zA-Z-'._ ]*$/)) {
            Error.innerHTML = "<small><span style='color: red'>Name Must Start with a letter</span></small>";
        } else {
            Name = validateInput(nameValue);
            if (str_word_count < 2) {
                Error.innerHTML = "<small><span style='color: red'>Minimum Two Words Needed</span></small>";
            } else {
                Error.innerText = "";

            }
        }
    }
}



// Email Validation
function ValidateEmailAddress(emailString) {
    var atSymbol = emailString.indexOf("@");
    if (atSymbol < 1) return false;

    var dot = emailString.indexOf(".");
    if (dot <= atSymbol + 2) return false;

    if (dot === emailString.length - 1) return false;

    return true;
}

function CheckEmail(emailString) {
    var Result = ValidateEmailAddress(emailString);

    if(!isNaN(emailString)){
        document.getElementById("emailOutput").innerHTML = "";
        document.getElementById("profileEditButton").disabled = true;
    }else{
        if (Result) {
            document.getElementById("emailOutput").innerHTML = "<small><span style='color:green;'>Valid Email Id</span></small>";
            document.getElementById("profileEditButton").disabled = false;
        } else {
            document.getElementById("emailOutput").innerHTML = "<small><span style='color:red;'>NOT a Valid Email Id</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        }
    }
}

// Password Validation
function validatePassword(pass) {
    if(!isNaN(pass)){
        document.getElementById("passwordOutput").innerHTML = "";
        document.getElementById("profileEditButton").disabled = true;
    } else{
        if (pass.length < 8) {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:red;'>Your password must be at least 8 characters.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        } else if (pass.search(/[a-z]/i) < 0) {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:red;'>Your password must contain at least one letter.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        } else if (pass.search(/[0-9]/) < 0) {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:red;'>Your password must contain at least one letter.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        } else if(pass.search(/[A-Z]/)){
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:red;'>Your password must contain at least one Uppercase letter.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        } else {
            document.getElementById("passwordOutput").innerHTML = "<small><span style='color:green;'>Valid Password</span></small>";
            document.getElementById("profileEditButton").disabled = false;
            return true;
        }
    }
}


// Username Validation
function validateUsername(user) {
    if(!isNaN(user)){
        document.getElementById("usernameOutput").innerHTML = "";
        document.getElementById("profileEditButton").disabled = true;
    } else{
        if (user.length < 5) {
            document.getElementById("usernameOutput").innerHTML = "<small><span style='color:red;'>Your username must be at least 5 characters.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        } else if (user.search(/[A-Z]/i) < 0) {
            document.getElementById("usernameOutput").innerHTML = "<small><span style='color:red;'>Your username must contain at least one uppercase letter.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        } else if (user.search(/[0-9]/) < 0) {
            document.getElementById("usernameOutput").innerHTML = "<small><span style='color:red;'>Your username must contain at least one numeric value.</span></small>";
            document.getElementById("profileEditButton").disabled = true;
        } else {
            document.getElementById("usernameOutput").innerHTML = "<small><span style='color:green;'>Valid Username</span></small>";
            document.getElementById("profileEditButton").disabled = false;
            return true;
        }
    }
}