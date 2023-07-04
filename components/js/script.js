const slider = document.querySelector('.slider');
const slides = slider.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const playBtn = document.querySelector('.play-btn');

let currentIndex = 0;

function playVideo(index) {
  slides.forEach((slide, i) => {
    if (i === index) {
      const video = slide.querySelector('video');
      video.play();
    } else {
      const video = slide.querySelector('video');
      video.pause();
      video.currentTime = 0;
    }
  });
}

prevBtn.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  playVideo(currentIndex);
});



nextBtn.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % slides.length;
  playVideo(currentIndex);
});

playBtn.addEventListener('click', () => {
  const currentSlide = slides[currentIndex];
  const video = currentSlide.querySelector('video');
  video.paused ? video.play() : video.pause();
});
slider.addEventListener('click', () => {
  const currentSlide = slides[currentIndex];
  const video = currentSlide.querySelector('video');
  video.paused ? video.play() : video.pause();
});

/***********************************form script ******************************************/
  
    window.addEventListener('DOMContentLoaded', (event) => {
      const form = document.querySelector('form');
      const successMessage = document.querySelector('#success-message');

      form.addEventListener('submit', (event) => {
        event.preventDefault();

        // Perform AJAX form submission here
        // ...

        // Show success message
        successMessage.style.display = 'block';

        // Hide success message after 3 seconds
        setTimeout(() => {
          successMessage.style.display = 'none';
        }, 3000);
      });
    });