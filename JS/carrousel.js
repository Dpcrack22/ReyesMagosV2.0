// carousel.js

let slides = document.querySelectorAll('.carousel .slide');
let current = 0;

// Función para mostrar la diapositiva actual
function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

// Botón "anterior"
document.querySelector('.carousel .prev').addEventListener('click', () => {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
});

// Botón "siguiente"
document.querySelector('.carousel .next').addEventListener('click', () => {
    current = (current + 1) % slides.length;
    showSlide(current);
});

// Cambio automático cada 5 segundos
setInterval(() => {
    current = (current + 1) % slides.length;
    showSlide(current);
}, 5000);
