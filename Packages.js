const mobileNavbarBtn = document.querySelector('.mobile-navbar-btn');
const header = document.querySelector('.header');

mobileNavbarBtn.addEventListener('click', () => {
  header.classList.toggle('active');
});

window.addEventListener('scroll', () => {
  header.classList.toggle('sticky', window.scrollY > 0);
});



