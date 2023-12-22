//Check Password Visibility//
let check = document.getElementById("check");
let password = document.getElementById("password");

check.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
        check.src = "../images/eye-open.png";
    } else {
        password.type = "password";
        check.src = "../images/eye-close.png";
    }
}
