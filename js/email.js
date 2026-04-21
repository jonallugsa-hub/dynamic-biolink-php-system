// ES: Ejecutar cuando el DOM esté listo
// EN: Run when DOM is fully loaded
document.addEventListener("DOMContentLoaded", () => {

  /* =========================
     EMAIL CONFIGURATION
     ========================= */

  // ES: Seleccionar todos los botones de email
  // EN: Select all email buttons
  const emailButtons = document.querySelectorAll(".email-btn");

  emailButtons.forEach(btn => {
    btn.addEventListener("click", e => {
      e.preventDefault();

      // ES: Obtener datos desde atributos HTML
      // EN: Get data from HTML attributes
      const email = btn.dataset.email;
      const subject = encodeURIComponent(btn.dataset.subject || "");
      const body = btn.dataset.body || "";

      // ES: Detectar si es móvil
      // EN: Detect if mobile device
      const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);

      if (isMobile) {
        // ES: Abrir app de correo
        // EN: Open mail app
        window.location.href = `mailto:${email}?subject=${subject}&body=${body}`;
      } else {
        // ES: Abrir Gmail en navegador
        // EN: Open Gmail in browser
        window.open(
          `https://mail.google.com/mail/?view=cm&fs=1&to=${email}&su=${subject}&body=${body}`,
          "_blank"
        );
      }
    });
  });

  /* =========================
     BACKGROUND VIDEO CONTROL
     ========================= */

  const video = document.querySelector(".video-bg video");
  const fallback = document.querySelector(".fallback-bg");

  if (!video || !fallback) return;

  // ES: Ocultar fondo cuando el video se reproduce
  // EN: Hide fallback when video starts playing
  video.addEventListener("playing", () => {
    fallback.style.display = "none";
  });

  // ES: Si el video falla, mostrar fallback
  // EN: If video fails, show fallback
  setTimeout(() => {
    if (video.paused || video.readyState < 2) {
      video.parentElement.style.display = "none";
      fallback.style.display = "block";
    }
  }, 1500);

  /* =========================
     SOCIAL BUTTON TOGGLE
     ========================= */

  // ES: Abrir/cerrar redes sociales
  // EN: Toggle social links visibility
  document.querySelectorAll(".social-toggle").forEach(btn => {
    btn.addEventListener("click", () => {
      btn.parentElement.classList.toggle("active");
    });
  });

});