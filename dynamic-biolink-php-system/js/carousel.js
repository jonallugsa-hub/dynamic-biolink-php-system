// ES: Obtener carrusel
// EN: Get carousel element
const track = document.getElementById("carousel");

// ES: Validar existencia (evita errores)
// EN: Validate existence (prevents errors)
if (track) {

  // ES: Duplicar contenido para efecto infinito
  // EN: Duplicate content for infinite loop
  track.innerHTML += track.innerHTML;

  let isDown = false;
  let startX;
  let scrollX = 0;

  // ES: Velocidad automática
  // EN: Auto scroll speed
  let autoScroll = 0.7;

  function animate() {
    scrollX += autoScroll;
    track.style.transform = `translateX(${-scrollX}px)`;

    // ES: Reiniciar scroll
    // EN: Reset scroll
    if (scrollX >= track.scrollWidth / 2) {
      scrollX = 0;
    }

    requestAnimationFrame(animate);
  }

  animate();

  /* ===== MOUSE ===== */

  track.addEventListener("mousedown", e => {
    isDown = true;
    startX = e.clientX;
  });

  window.addEventListener("mouseup", () => {
    isDown = false;
  });

  window.addEventListener("mousemove", e => {
    if (!isDown) return;
    const dx = e.clientX - startX;
    scrollX -= dx;
    startX = e.clientX;
  });

  /* ===== TOUCH ===== */

  track.addEventListener("touchstart", e => {
    startX = e.touches[0].clientX;
  });

  track.addEventListener("touchmove", e => {
    const dx = e.touches[0].clientX - startX;
    scrollX -= dx;
    startX = e.touches[0].clientX;
  });

}