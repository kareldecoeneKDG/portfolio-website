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
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 5 + 0.5}s`;
            }
        });

        //Burger animation
        burger.classList.toggle('toggle');
    });


    //When cross is pressed remove animation as well
    if(document.querySelector('.toggle')){
        const toggle = document.querySelector('.toggle');

        toggle.addEventListener('click', () => {
            for (i = 0; i < 4; i++) {
                navLinks[i].style.animation = "";
            }
        });

        toggle.classList.remove('toggle');
    }

    //Remove animation on links to add them again later
    var i;
    for (i = 0; i < 4; i++) {
        navLinks[i].addEventListener('click', () => {
            nav.classList.toggle('nav-active');
            burger.classList.toggle('toggle');

            for (i = 0; i < 4; i++) {
                navLinks[i].style.animation = "";
            }
        });
    }
}

navSlide();