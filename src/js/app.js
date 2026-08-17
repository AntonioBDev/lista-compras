document.addEventListener("DOMContentLoaded", () => {
  const btnAbrir = document.getElementById("btnAbrirModal");
  const modal = document.getElementById("modalCrear");
  const btnCerrar = document.querySelector(".cerrar-modal");

  if (btnAbrir && modal) {
    // Abrir el modal
    btnAbrir.addEventListener("click", (e) => {
      e.preventDefault(); // Evita que recargue la página o navegue a la URL
      modal.style.display = "flex";
    });

    // Cerrar con la X
    btnCerrar.addEventListener("click", () => {
      modal.style.display = "none";
    });

    // Cerrar haciendo clic fuera de la caja del modal
    window.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.style.display = "none";
      }
    });
  }
});
