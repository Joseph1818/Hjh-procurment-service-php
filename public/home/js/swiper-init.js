document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper(".swiper-container", {
      loop: true, // Ensures the carousel loops indefinitely
      autoplay: {
        delay: 500, // Time between slides in milliseconds
        disableOnInteraction: false, // Prevent autoplay from stopping when user interacts
      },
      // Remove the effect: 'fade' to use the default sliding transition
      effect: "slide", // Default slide effect (this is actually not necessary to mention, but it's good for clarity)
      speed: 2000, // The speed of the transition in milliseconds (can adjust to your preference)
      slidesPerView: 1, // Shows one slide at a time
      spaceBetween: 0, // No space between slides
      direction: 'horizontal', // Ensure horizontal direction for sliding
    });
  });
  