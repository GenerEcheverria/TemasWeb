document.querySelector('.menu-btn').addEventListener('click',() => {
    document.querySelector('.nav-menu').classList.toggle('show');
})

ScrollReveal().reveal('.showcase');
ScrollReveal().reveal('.news', { delay: 500});
ScrollReveal().reveal('.banner', { delay: 500});
ScrollReveal().reveal('.banner2', { delay: 500});