// Typing animation for chat box
const chatBox = document.getElementById("chat-box");
const dialogue = [
  "You: Can I have chickens on this land?",
  "Ask the Land: Yes, you can have up to 100 chickens for personal (non-commercial) use.",
  "Ask the Land: Would you like me to check the survey for chicken coop ideas?"
];

let lineIndex = 0;
let charIndex = 0;
let currentLine = "";

function type() {
  if (lineIndex < dialogue.length) {
    if (charIndex < dialogue[lineIndex].length) {
      currentLine += dialogue[lineIndex].charAt(charIndex);
      chatBox.innerHTML = `<p>${currentLine}</p>`;
      charIndex++;
      setTimeout(type, 40);
    } else {
      chatBox.innerHTML += "<br>";
      lineIndex++;
      charIndex = 0;
      currentLine = "";
      setTimeout(type, 800);
    }
  }
}

// Start typing animation when page loads
window.addEventListener("load", () => {
  setTimeout(type, 2000); // Wait 2 seconds after page load
});

// Reveal-on-scroll animation
const faders = document.querySelectorAll(".fade-up");

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      observer.unobserve(entry.target); // Only animate once
    }
  });
}, {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px"
});

faders.forEach(fade => observer.observe(fade));

// Parallax effect for hero background
let lastScrollTop = 0;
const hero = document.getElementById("hero");

window.addEventListener("scroll", () => {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
  if (scrollTop < hero.offsetHeight) {
    const parallaxSpeed = 0.5;
    hero.style.backgroundPositionY = scrollTop * parallaxSpeed + "px";
  }
  
  lastScrollTop = scrollTop;
}, { passive: true });



