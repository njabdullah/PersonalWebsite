document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const profileSection = document.querySelector('#profile');
    const navbar = document.querySelector('#navbar');
    const hamburger = document.querySelector('#hamburger');

    // Handle scroll event
    document.addEventListener('scroll', function() {
        const profileSectionTop = profileSection.offsetTop;
        if (window.scrollY >= profileSectionTop) {
            header.classList.add('transformed');
        } else {
            header.classList.remove('transformed');
        }
    });

    // Handle hamburger click event
    hamburger.addEventListener('click', function() {
        navbar.classList.toggle('active');
    });
});
