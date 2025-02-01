document.querySelector('.hamburger-menu').addEventListener('click', function () {
    const menuLinks = document.querySelector('.links');

    if (menuLinks.style.visibility === 'hidden' || menuLinks.style.visibility === '') {
        menuLinks.style.visibility = 'visible';
        menuLinks.style.opacity = '1';
        menuLinks.style.transition = 'visibility 0s, opacity 0.5s linear';
    } else {
        menuLinks.style.visibility = 'hidden';
        menuLinks.style.opacity = '0';
        menuLinks.style.transition = 'visibility 0s 0.5s, opacity 0.5s linear'; 
    }
});
