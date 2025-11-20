// Typing animation for chat box
const chatBox = document.getElementById("chat-box");
const dialogue = [
    { type: 'user', text: "What's that blue flower by the creek?" },
    { type: 'ai', text: "That looks like Virginia Bluebells (Mertensia virginica). They thrive in moist woodlands near streams." },
    { type: 'user', text: "Is the trail ahead steep?" },
    { type: 'ai', text: "The next 0.5 miles has a 200ft elevation gain. It's moderate, but take your time!" }
];

let lineIndex = 0;
let charIndex = 0;
let currentLine = "";
let isTyping = false;

function type() {
    if (lineIndex < dialogue.length) {
        const msg = dialogue[lineIndex];

        // Start of a new line
        if (charIndex === 0) {
            // Add container for the message if it doesn't exist for this line yet
            // But actually we are building the string char by char.
            // Let's simplify: we'll just update the innerHTML of the last paragraph or create a new one.
        }

        if (charIndex < msg.text.length) {
            currentLine += msg.text.charAt(charIndex);

            // Re-render all previous lines + current typing line
            let html = '';
            for (let i = 0; i < lineIndex; i++) {
                html += `<div class="${dialogue[i].type === 'user' ? 'user-msg' : 'ai-msg'}">
                  <strong>${dialogue[i].type === 'user' ? 'You' : 'TrailTalk'}:</strong> ${dialogue[i].text}
                 </div>`;
            }
            html += `<div class="${msg.type === 'user' ? 'user-msg' : 'ai-msg'}">
                <strong>${msg.type === 'user' ? 'You' : 'TrailTalk'}:</strong> ${currentLine}
               </div>`;

            chatBox.innerHTML = html;

            charIndex++;
            setTimeout(type, 30 + Math.random() * 20); // Random typing speed
        } else {
            // Line finished
            lineIndex++;
            charIndex = 0;
            currentLine = "";
            setTimeout(type, 1000); // Pause between messages
        }
    } else {
        // Reset loop after a long pause
        setTimeout(() => {
            lineIndex = 0;
            charIndex = 0;
            currentLine = "";
            type();
        }, 5000);
    }
}

// Start typing animation when page loads
window.addEventListener("load", () => {
    setTimeout(type, 1500);
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
const hero = document.getElementById("hero");

window.addEventListener("scroll", () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (hero && scrollTop < hero.offsetHeight) {
        const parallaxSpeed = 0.5;
        hero.style.backgroundPositionY = scrollTop * parallaxSpeed + "px";
    }
}, { passive: true });
