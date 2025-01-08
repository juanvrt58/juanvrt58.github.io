// script.js

// Función para cotizar un plan
/*function cotizarPlan(planName) {
    // Crear el modal
    const modal = document.createElement('div');
    modal.className = 'modal';
    
    // Contenido del modal
    modal.innerHTML = `
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <h2>Cotiza el Plan: ${planName}</h2>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScfMUIJldutif41Bjbcg7g2y7dzT4kRd2x-ND70ha7e2DaktQ/viewform?embedded=true" width="640" height="1454" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
    `;

    // Añadir el modal al cuerpo de la página
    document.body.appendChild(modal);

    // Desactivar el scroll mientras el modal está activo
    document.body.style.overflow = 'hidden';
}
    */

// Función para cerrar el modal
function closeModal() {
    const modal = document.querySelector('.modal');
    document.body.removeChild(modal);
    document.body.style.overflow = 'auto'; // Rehabilitar el scroll

}

// Función para cerrar el modal
function closeModal() {
    const modal = document.querySelector('.modal');
    if (modal) {
        modal.remove();
        document.body.style.overflow = 'auto'; // Reactiva scroll
    }
}
//Esto es lo que suaviza el menú flotante
document.querySelectorAll('.floating-menu a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const faqItem = button.parentElement;
  
      faqItem.classList.toggle('open');
  
      // Cierra otros FAQ abiertos
      document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
          item.classList.remove('open');
        }
      });
    });
  });
  