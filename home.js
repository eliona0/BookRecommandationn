const carousel = document.querySelector(".carousel");
const slides = document.querySelectorAll(".section-content");
const totalSlides = slides.length-1;
const dotsContainer = document.querySelector(".carousel-dots");

let currentSlide = 0;
let autoSlideInterval; 

function createDots() {
    for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement("button");
        dot.addEventListener("click", () => {
            goToSlide(i);
            resetAutoSlide();
        });
        dotsContainer.appendChild(dot);
    }
    updateDots();
}

function updateDots() {
    const dots = dotsContainer.querySelectorAll("button");
    dots.forEach((dot, index) => {
        if (index === currentSlide) {
            dot.classList.add("active");
        } else {
            dot.classList.remove("active");
        }
    });
}

function showSlide(index) {
    const offset = -index * 100;
    carousel.style.transform = `translateX(${offset}%)`;
    currentSlide = index;
    updateDots();
}

function goToSlide(index) {
    showSlide(index);
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides; 
    showSlide(currentSlide);
}

function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 5000);
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval); 
    startAutoSlide();
}

createDots();
showSlide(currentSlide);
startAutoSlide(); 

