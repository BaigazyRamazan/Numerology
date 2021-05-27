function popOutSignUp() {
    if (document.querySelector('#username').value != "") {
        document.querySelector('#username').value = "";
        document.querySelector('#user_mail').value = "";
        document.getElementById('user_pass').value = "";
        document.getElementById('user_passRe').value = "";
        document.getElementById('checkMe').checked = false;
    }
    document.querySelector('.popOutSignUp').style.display = "flex";
    document.querySelector('.popOutLogIn').style.display = 'none';
}

function submitLog(value) {
    var pwr = document.getElementById('user_pass').value;
    if (value == "") {
        window.alert('Name is required');
        return;
    } else if (pwr == "" || document.getElementById('user_passRe').value == "") {
        window.alert("Password is required");
        return;
    } else if (pwr != document.getElementById('user_passRe').value) {
        window.alert("Repear your password correctly");
        return;
    } else if (pwr.toString().length < 8) {
        window.alert('Password is not valid');
        return;
    } else if (document.getElementById("checkMe").checked == false) {
        window.alert("Check the box");
        return;
    }

    // } else if (document.getElementById('checkMe').checked == false) {
    //     window.alert("Not checked");
    //     return;
    // }
    // window.alert(document.getElementById('checkMe').checked);
    // if (value.toString().length <= 15 && value.toString().length >= 13) {
    //     document.querySelector('.logout').style.fontSize = '70%';
    // } else if (value.toString().length <= 18) {
    //     document.querySelector('.logout').style.fontSize = '60%';
    // } else if (value.toString().length <= 20) {
    //     document.querySelector('.logout').style.fontSize = '50%';
    // } else if (value.toString().length <= 26) {
    //     document.querySelector('.logout').style.fontSize = '50%';
    // }

    // if (value.toString().length >= 16) {
    //     document.querySelector('#logOut').style.fontSize = '50%';
    // } else if (value.toString().length >= 15) {
    //     document.querySelector('#logOut').style.fontSize = '60%';
    // } else if (value.toString().length >= 13) {
    //     document.querySelector('#logOut').style.fontSize = '70%';
    // }
    document.querySelector('#logOut').innerHTML = value;
    document.querySelector('#logOut-sm').innerHTML = value;
    if (window.screen.width <= '1023px') {
        document.querySelector('.logout').style.display = "none";
    } else {
        document.querySelector('.logout').style.display = "flex";
    }
    document.querySelector('.logout-sm').style.display = 'block';
    document.querySelector('.popOutSignUp').style.display = "none";
    document.querySelector('.sign-up').style.display = "none";
    document.querySelector('.sign-up-sm').style.display = "none";
}

function popOut1() {
    document.querySelector('.popOut1').style.display = 'flex';
}

function logOut() {
    if (window.confirm("Do you want log out? \nPress 'OK', if you want log out.")) {
        document.querySelector('.logout').style.display = "none";
        document.querySelector('.sign-up').style.display = "block";
        document.querySelector('.logout-sm').style.display = "none";
        document.querySelector('.sign-up-sm').style.display = "block";
    }
}

function closePopOutSignUp() {
    document.querySelector('.popOutSignUp').style.display = 'none';
}

function popOutLogIn() {
    if (document.querySelector('#usernamelog').value != "") {
        document.querySelector('#usernamelog').value = "";
        document.querySelector('#user_maillog').value = "";
        document.getElementById('user_passlog').value = "";
        document.getElementById('user_passRelog').value = "";
        document.getElementById('checkMelog').checked = false;
    }
    document.querySelector('.popOutLogIn').style.display = "flex";
    document.querySelector('.popOutSignUp').style.display = 'none';
}

function closePopOutLogIn() {
    document.querySelector('.popOutLogIn').style.display = 'none';
}

function submitLog2(value) {
    var pwr = document.getElementById('user_passlog').value;
    if (value == "") {
        window.alert('Name is required');
        return;
    } else if (pwr == "" || document.getElementById('user_passRelog').value == "") {
        window.alert("Password is required");
        return;
    } else if (pwr != document.getElementById('user_passRelog').value) {
        window.alert("Repear your password correctly");
        return;
    } else if (pwr.toString().length < 8) {
        window.alert('Password is not valid');
        return;
    } else if (document.getElementById("checkMelog").checked == false) {
        window.alert("Check the box");
        return;
    }

    // } else if (document.getElementById('checkMe').checked == false) {
    //     window.alert("Not checked");
    //     return;
    // }
    // window.alert(document.getElementById('checkMe').checked);
    document.querySelector('#logOut').innerHTML = value;
    document.querySelector('#logOut-sm').innerHTML = value;
    document.querySelector('.logout').style.display = "flex";
    document.querySelector('.logout-sm').style.display = "block";
    document.querySelector('.popOutLogIn').style.display = "none";
    document.querySelector('.sign-up').style.display = "none";
    document.querySelector('.sign-up-sm').style.display = "none";
}

function barOpen() {
    document.querySelector('.my-accordion').style.display = 'block';
}

function barClose() {
    document.querySelector('.my-accordion').style.display = 'none';
}