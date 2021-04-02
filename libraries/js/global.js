var firstname = document.getElementById("txtfirstname");
var lastname = document.getElementById("txtlastname");
var address = document.getElementById("txtaddress");
var username = document.getElementById("txtusername");
var password = document.getElementById("txtpassword");
var confirmpass = document.getElementById("txtconfirm");

var male = document.getElementById("radiomale");
var female = document.getElementById("radiofemale");

const app = "app/";
const helper = "helpers";

firstname.addEventListener("keyup", event => {
    if(event.keyCode === 13) { 
        onregister();
    }
})
lastname.addEventListener("keyup", event => {
    if(event.keyCode === 13) { 
        onregister();
    }
})
address.addEventListener("keyup", event => {
    if(event.keyCode === 13) { 
        onregister();
    }
})
username.addEventListener("keyup", event => {
    if(event.keyCode === 13) { 
        onregister();
    }
})
password.addEventListener("keyup", event => {
    if(event.keyCode === 13) { 
        onregister();
    }
})
confirmpass.addEventListener("keyup", event => {
    if(event.keyCode === 13) { 
        onregister();
    }
})