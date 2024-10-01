//         navbar
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('active');
  hamburger.classList.toggle('active');  // This toggles the X icon
});


// section

let currentIndex = 0;
const images = document.querySelectorAll('.images-container img');

function autoSlide() {
    images[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % images.length;
    images[currentIndex].classList.add('active');
}

setInterval(autoSlide, 1000); // Change image every 4 seconds


