
        const track = document.querySelector('.carousel-track');
        const items = document.querySelectorAll('.carousel-item');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');
        const totalItems = items.length;
        let currentIndex = 0;

        function updateCarousel() {
            const width = items[0].clientWidth;
            track.style.transform = `translateX(-${currentIndex * width}px)`;
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? totalItems - 1 : currentIndex - 1;
            updateCarousel();
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === totalItems - 1) ? 0 : currentIndex + 1;
            updateCarousel();
        });

        window.addEventListener('resize', updateCarousel);

        function calculateEmissions() {
            const energyInput = document.getElementById('energyInput').value;
            const resultDiv = document.getElementById('result');
            const emissionsSpan = document.getElementById('emissions');
            if (energyInput && energyInput > 0) {
                const emissions = (energyInput * 0.5).toFixed(2);
                emissionsSpan.textContent = emissions;
                resultDiv.classList.remove('hidden');
            } else {
                resultDiv.classList.add('hidden');
            }
        }
