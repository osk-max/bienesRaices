document.addEventListener('DOMContentLoaded', function() {

  eventListeners();

  darkMode();
});

// Funciones - Eventos
function darkMode() {
  const btnDarkMode = document.querySelector('.dark__mode--boton');
  btnDarkMode.addEventListener('click', function() {
    document.body.classList.toggle('dark__mode');
  });  
}

function eventListeners() {
  const mobileMenu = document.querySelector('.mobile__menu');

  mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
  const menuNavegacion = document.querySelector('.navegacion');
  
  menuNavegacion.classList.toggle('mostrar');  
}
