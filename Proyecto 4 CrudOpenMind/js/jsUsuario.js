function validarNombre() {

    var name = document.getElementById('name').value;
    var noValid = /\s/;
    if (name.length < 2){
        document.getElementById('nameInfo').classList.add("error");
        document.getElementById('nameInfo').innerHTML = "introduce un nombre";

    }else if(noValid.test (name)){
        document.getElementById('nameInfo').innerHTML = "campo no puede estar vacío";
        document.getElementById('nameInfo').classList.add("error");

    }else {
        document.getElementById('nameInfo').classList.remove("error");  //elimina el error
        document.getElementById('nameInfo').innerHTML = "";             // lo deja en blanco
    }
}
document.getElementById('name').onblur = validarNombre;



function validarPassword(){
        var password = document.getElementById("pass").value;

        if (password.length < 6 || password.length > 10) {
        document.getElementById('passInfo').classList.add("error");
        document.getElementById('passInfo').innerHTML = "entre 6 y 10 caracteres";
    }
        else{
        document.getElementById('passInfo').classList.remove("error");//quitar la clase de error//
        document.getElementById('passInfo').innerHTML = "";//texto vacio//
    }
}   
document.getElementById('pass').onblur = validarPassword;



function validarEmail() {
    patron = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
    var s = document.getElementById('mail').value;
    if (!patron.test(s)) {
        document.getElementById('mailInfo').innerHTML = "El correo no cumple con los parámetros";
    }else{
        document.getElementById('mailInfo').innerHTML="";
    }
}

document.getElementById('mail').onblur = validarEmail;