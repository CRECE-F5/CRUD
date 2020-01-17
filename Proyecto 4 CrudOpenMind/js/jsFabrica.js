function validarNombreFabrica() {

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
document.getElementById('nombre').onblur = validarNombreFabrica;


function validarCiudadFabrica() {

    var name = document.getElementById('ciudad').value;
    if (name.length < 2) {
        document.getElementById('ciudadInfo').classList.add("error");
        document.getElementById('ciudadInfo').innerHTML = "introduce un nombre";
    }
    else {
        document.getElementById('ciudadInfo').classList.remove("error");  //elimina el error
        document.getElementById('ciudadInfo').innerHTML = "";             // lo deja en blanco
    }
}
document.getElementById('ciudad').onblur = validarCiudadFabrica;



