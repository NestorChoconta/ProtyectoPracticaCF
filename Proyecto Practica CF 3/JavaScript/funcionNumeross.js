function validarCampo() {
    var campoNumerico = document.getElementById("campoNumerico");
    var errorCampoNumerico = document.getElementById("errorCampoNumerico");

    if (campoNumerico.value < 1e7 || campoNumerico.value > 1e10) {
        errorCampoNumerico.innerHTML = '<div class="alert alert-succes">Debe tener entre 8  y 10 numeros </div>';
    } else {
        errorCampoNumerico.innerHTML = "";
    }
}

document.getElementById("miFormulario").addEventListener("submit", function(event) {
    validarCampo(); // Validar una vez más antes de enviar el formulario

    var errorCampoNumerico = document.getElementById("errorCampoNumerico");

    if (errorCampoNumerico.innerHTML !== "") {
        event.preventDefault(); // Evitar que se envíe el formulario si no pasa la validación
    }
});