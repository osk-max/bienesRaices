document.addEventListener('DOMContentLoaded', function() {

  eventListeners();
});

function eventListeners() {
  const mobileMenu = document.querySelector('.mobile__menu');

  mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
  const menuNavegacion = document.querySelector('.navegacion');
  
  menuNavegacion.classList.toggle('mostrar');  
}


