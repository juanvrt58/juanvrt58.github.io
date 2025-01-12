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


/* Función para cerrar el modal */

function openModal() {
  const modal = document.getElementById("modal");
  modal.style.display = "block";

}
document.querySelectorAll('.btn-cotizar').forEach(button => {
  button.addEventListener('click', openModal);
});

document.querySelector('.close-btn').addEventListener('click', closeModal);
function closeModal() {
  const modal = document.getElementById("modal");
  document.body.style.overflow = 'auto'; // Rehabilitar el scroll
  modal.style.display ="none";

}



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