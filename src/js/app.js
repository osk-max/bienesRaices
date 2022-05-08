document.addEventListener('DOMContentLoaded', function() {

  eventListeners();

  darkMode();
});

// Funciones - Eventos
function darkMode() {
  const prefiereDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

  if(prefiereDarkMode.matches) {
    document.body.classList.add('dark__mode');
  } else {
    document.body.classList.remove('dark__mode');
  }

  prefiereDarkMode.addEventListener('change', function() {
    if(prefiereDarkMode.matches) {
      document.body.classList.add('dark__mode');
    } else {
      document.body.classList.remove('dark__mode');
    }
  });

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
