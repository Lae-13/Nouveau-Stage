document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const navWrapper = document.querySelector('.nav-wrapper');

    if (burgerMenu && navWrapper) {
        burgerMenu.addEventListener('click', function () {
            navWrapper.classList.toggle('active');
        });
    }
});
