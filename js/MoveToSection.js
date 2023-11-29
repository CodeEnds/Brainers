const section2 = document.getElementById('card-section');
const arrow = document.getElementById('arrow');

arrow.addEventListener('click', function() {
    section2.scrollIntoView({ behavior: 'smooth' });
});