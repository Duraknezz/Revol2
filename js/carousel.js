document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.querySelector('.carousel-inner');
    const prevButton = document.querySelector('.carousel-control.prev');
    const nextButton = document.querySelector('.carousel-control.next');
    const circulitos = document.querySelectorAll('.circulito');
    const totalCirculitos = circulitos.length;
    let currentIndex = 0;

    function updateCarousel() {
        const offset = -currentIndex * 80 / 3; // Mueve por el ancho de tres elementos
        carouselInner.style.transform = 'translateX(${offset}%)';
    }

    nextButton.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalCirculitos;
        updateCarousel();
    });

    prevButton.addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + totalCirculitos) % totalCirculitos;
        updateCarousel();
    });

    // Mostrar solo 3 circulitos en el carrusel
    circulitos.forEach((circulito, index) => {
        circulito.style.flex = '0 0 33.3333%'; // Ajusta el tamaño de cada circulito para que 3 quepan en una fila
    });

    updateCarousel();
});