document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.navbar-toggle');
    const navbar = document.querySelector('.navbar ul');
  
    toggle.addEventListener('click', () => {
      navbar.classList.toggle('active');
    });
  });
   // Función para cargar el archivo nav.html
   function loadNav() {
    const navPlaceholder = document.getElementById('nav-placeholder');
    fetch('recursos/nav.html')  // Ruta al archivo nav.html
      .then(response => response.text())
      .then(data => {
        navPlaceholder.innerHTML = data;
      })
      .catch(err => console.log('Error al cargar el nav:', err));
  }

  // Llamar a la función para cargar el nav
  loadNav();