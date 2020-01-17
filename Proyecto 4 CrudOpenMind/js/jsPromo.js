function validarNombrePromocion() {

    var name = document.getElementById('nombre').value;
    var noValid = /^([A-Z]|[a-z]){4}\s\d{6}\s\d/;
    if (name.length < 2) {
        document.getElementById('nombreInfo').classList.add("error");
        document.getElementById('nombreInfo').innerHTML = "introduce un nombre";
    }
    else if(noValid.test (name)){
        document.getElementById('nombreInfo').innerHTML = "campo no puede estar vacío";
        document.getElementById('nombreInfo').classList.add("error");
    }
    else {
        document.getElementById('nombreInfo').classList.remove("error");  //elimina el error
        document.getElementById('nombreInfo').innerHTML = "";             // lo deja en blanco
    }
}
document.getElementById('nombre').onblur = validarNombrePromocion;


/*validación fecha inicio*/

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
    var fecha=document.getElementById("fechIn").value;
    if(validate_fecha(fecha)==true)
        document.getElementById("result1").innerHTML="La fecha es correcta";
    else
        document.getElementById("result1").innerHTML="La fecha es incorrecta";
}

/*Inicio de fecha Fin*/
function isValidDat(day,month,year){
    var dteDate;
    month=month-1;
    dteDate=new Date(year,month,day);  
    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
}
 

function validate_fech(fech){
    var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");
 
    if(fech.search(patron)==0){
        var values=fech.split("-");
        if(isValidDat(values[2],values[1],values[0]))
        {
            return true;
        }
    }
    return false;
}

function validar1(){
    var fech=document.getElementById("fechFin").value;
    if(validate_fech(fech)==true)
        document.getElementById("result2").innerHTML="La fecha es correcta";
    else
        document.getElementById("result2").innerHTML="La fecha es incorrecta";
}