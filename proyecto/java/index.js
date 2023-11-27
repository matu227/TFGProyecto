        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');

        let currentIndex = 0;

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlider();
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlider();
        });

        function updateSlider() {
            const translateValue = -currentIndex * 25;
            slider.style.transition = 'transform 0.5s ease-in-out'; // Agregamos una transición suave
            slider.style.transform = `translateX(${translateValue}%)`;

            // Al llegar al último slide, volvemos al primero y viceversa
            if (currentIndex === slides.length - 1) {
                setTimeout(() => {
                    currentIndex = 0;
                    slider.style.transition = 'none'; // Eliminamos la transición para una transición suave de regreso
                    slider.style.transform = `translateX(0%)`;
                }, 500); // Delay para que la transición termine antes de restablecer la posición
            }
        }