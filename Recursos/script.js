//declaracion de variables
document.getElementById("btn__Registrarse").addEventListener("click",register);
document.getElementById("btn__iniciar_sesion").addEventListener("click",iniciar);

/*(document.querySelector)decimos que la variable será igual al formulario*/
var contenedor__login_register = document.querySelector(".contenedor__login_register");
var formulario__login = document.querySelector(".formulario__login");
var formulario__register = document.querySelector(".formulario__register");
var caja__trasera_login = document.querySelector(".caja__trasera_login");
var caja__trasera_register = document.querySelector(".caja__trasera_register");

function iniciar() {
    formulario__register.style.display = "none";//se muestra 
    contenedor__login_register.style.left = "10px";
    formulario__login.style.display = "block";//no muestre
    caja__trasera_register.style.opacity = "1";
    caja__trasera_login.style.opacity = "0";
}
function register() {
    formulario__register.style.display = "block";//se muestra 
    contenedor__login_register.style.left = "410px";
    formulario__login.style.display = "none";//no muestre
    caja__trasera_register.style.opacity = "0";
    caja__trasera_login.style.opacity = "1";
}

