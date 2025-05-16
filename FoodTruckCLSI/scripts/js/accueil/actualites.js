    // carrousel
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('accueilCarActu-track');
    const prevBtn = document.getElementById('btn-prev-actu');
    const nextBtn = document.getElementById('btn-next-actu');

    let currentPosition = 0;

    function updateSlide() {
        const items = document.querySelectorAll('.accueilCarActu-item');
        const itemWidth = items[0].offsetWidth;
        const visibleWidth = track.parentElement.offsetWidth;

        const maxScroll = items.length * itemWidth - visibleWidth;
        currentPosition = Math.max(0, Math.min(currentPosition, maxScroll));

        // Appliquer le décalage
        track.style.transform = `translateX(-${currentPosition}px)`;

        // Gérer la visibilité des flèches
        prevBtn.style.display = currentPosition === 0 ? 'none' : 'block';
        nextBtn.style.display = currentPosition >= maxScroll ? 'none' : 'block';
    }

    nextBtn.addEventListener('click', () => {
        const itemWidth = document.querySelector('.accueilCarActu-item').offsetWidth;
        currentPosition += itemWidth;
        updateSlide();
    });

    prevBtn.addEventListener('click', () => {
        const itemWidth = document.querySelector('.accueilCarActu-item').offsetWidth;
        currentPosition -= itemWidth;
        updateSlide();
    });

    window.addEventListener('resize', updateSlide);
    window.addEventListener('load', updateSlide);
});
