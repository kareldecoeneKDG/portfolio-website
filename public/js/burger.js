const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links ul a li');
    //const navLinksValues = navLinks.values();



    burger.addEventListener('click', () => {
        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Animate Links
        navLinks.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 5 + 0.5}s`;
            }
        });

        //Burger animation
        burger.classList.toggle('toggle');

        navLinks[0].addEventListener('click', () => {
            nav.classList.toggle('nav-active');
        });
        navLinks[1].addEventListener('click', () => {
            nav.classList.toggle('nav-active');
        });
        navLinks[2].addEventListener('click', () => {
            nav.classList.toggle('nav-active');
        });
        navLinks[3].addEventListener('click', () => {
            nav.classList.toggle('nav-active');
        });
        
    });

}

navSlide();