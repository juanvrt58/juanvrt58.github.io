document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".cotizar-btn");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            alert("Gracias por tu interés. Pronto te contactaremos para cotizar.");
        });
    });
});
