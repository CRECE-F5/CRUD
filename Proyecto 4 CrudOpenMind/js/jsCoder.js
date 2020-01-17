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


function validarApe() {

    var apellido1 = document.getElementById('ape').value;
    var noValido = /\s/;
    if (apellido1.length < 2) {
        document.getElementById('apeInfo').classList.add("error");
        document.getElementById('apeInfo').innerHTML = "introduce primer apellido";

    }else if (noValido.test (apellido)){
        document.getElementById('apeInfo').classList.add("error");
        document.getElementById('apeInfo').innerHTML = "campo no puede estar vacío";
    }
    else {
        document.getElementById('apeInfo').classList.remove("error");  //elimina el error
        document.getElementById('apeInfo').innerHTML = "";             // lo deja en blanco
    }
}
document.getElementById('ape').onblur = validarApe;


function validarDni() {

    var dni = document.getElementById('dni').value;
    if (dni.length > 9 || dni.length <2) {
        document.getElementById('dniInfo').classList.add("error");
        document.getElementById('dniInfo').innerHTML = "introduce un DNI";
    }
    else {
        document.getElementById('dniInfo').classList.remove("error");  //elimina el error
        document.getElementById('dniInfo').innerHTML = "";             // lo deja en blanco
    }
}
document.getElementById('dni').onblur = validarDni;


/* VALIDACON FECHA*/
function isValidDate(day,month,year){
    var dteDate;
    month=month-1;
    dteDate=new Date(year,month,day);  
    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
}
 

function validate_fecha(fecha){
    var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");
 
    if(fecha.search(patron)==0){
        var values=fecha.split("-");
        if(isValidDate(values[2],values[1],values[0]))
        {
            return true;
        }
    }
    return false;
}
 

function validar(){
    var fecha=document.getElementById("user_date").value;
    if(validate_fecha(fecha)==true)
        document.getElementById("result").innerHTML="La fecha "+fecha+" es correcta";
    else
        document.getElementById("result").innerHTML="La fecha "+fecha+" es incorrecta";
}