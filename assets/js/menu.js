document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const navWrapper = document.querySelector('.nav-wrapper');
    const body = document.body;

    burgerMenu.addEventListener('click', function () {
        navWrapper.classList.toggle('active');
        burgerMenu.classList.toggle('active');
        body.classList.toggle('menu-open');
    });
}); 