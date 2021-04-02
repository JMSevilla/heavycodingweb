
function navigateregister() { 
    window.location.href = "http://localhost/webprogs/registration.php";
}

function onregister() { 
   var registerObj = { 
       'data1' : firstname.value,
       'data2' : lastname.value,
       'data3' : address.value,
       'data4' : username.value,
       'data5' : password.value,
       'data6' : confirmpass.value,
       'data7' : male.value,
       'data8' : female.value,
       'trigger' : true
   }
   validate(registerObj);
}

function validate(registerObj) {
        if(registerObj.data5 != registerObj.data6) { 
            alert("Password mismatch");
            return false;
        }
        else { 
            promiseAll(registerObj)
        }
}

async function promiseAll(registerObj) {
     await Promise.all([__construct(registerObj)]);
}

async function __construct(registerObj) { 
    const promise = new Promise(resolve => {
        registerRequest(registerObj, resolve);
    })
    await promise.then(response => {
        console.log(response);
    })
}

function registerRequest(registerObj, resolve) {
    $.post(app + helper + "/postHelper.php", registerObj, (response) => { 
           resolve(response);
    })
}

function malechange() {
    female.value = null;
    male.value ="Male";
}

function femalechange() {
    male.value = null;
    female.value ="Female";
}