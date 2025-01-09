// Obtener el modal
var modal = document.getElementById("modal");

// Obtener el botón de cerrar
var closeBtn = document.getElementsByClassName("close-btn")[0];

// Abrir el modal (por ejemplo, con un botón)
function openModal() {
  modal.style.display = "block";
}

// Cerrar el modal cuando se haga clic en "Cerrar"
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// Cerrar el modal si se hace clic fuera de la ventana modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

    function openModal(serviceName) {
        const modal = document.getElementById('modal');
        modal.style.display = 'block';
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('modal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
