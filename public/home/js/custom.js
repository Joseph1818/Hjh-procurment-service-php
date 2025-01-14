// Initialize counting for visible sections only
function initializeCounter(element) {
  const endValue = parseInt(element.getAttribute("data-val"), 10);
  let startValue = 0;

  const counter = setInterval(() => {
    startValue += 1;
    element.textContent = startValue + '+';
    if (startValue === endValue) {
      clearInterval(counter);
    }
  }, 50); // Adjust speed by changing the interval (50ms for smoother counting)
}

// Intersection Observer to detect when the section becomes visible
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".num"); // Select all counters
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          initializeCounter(entry.target); // Start counter
          observer.unobserve(entry.target); // Stop observing once counted
        }
      });
    },
    { threshold: 0.5 } // Trigger when 50% of the element is visible
  );

  counters.forEach((counter) => observer.observe(counter)); // Observe each counter
});
