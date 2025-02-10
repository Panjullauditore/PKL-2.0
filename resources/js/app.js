import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const stars = document.querySelectorAll('.far');
stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        let rating = index + 1;
        stars.forEach((s, i) => {
            if (i <= index) {
                s.classList.remove('far');
                s.classList.add('fas');
            } else {
                s.classList.remove('fas');
                s.classList.add('far');
            }
        });
        document.getElementById('rating').value = rating;
    });
});