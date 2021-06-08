<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- General -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>KAREL.</title>


        <!-- Fonts -->
            <!-- Google fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&family=Rubik:ital,wght@0,500;0,700;1,400&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

            <!-- Font awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>



    <body>
        <div class="container" id="container">


            <!-- BEGIN HEADER -->
            <div class="top">
                <nav class="top__nav">


                    <!-- LOGO -->
                    <div class="top__nav__title">
                        <a href="#container">
                            <h3 class="top__nav__title__h3">
                                KAREL<span class="top__nav__title__h3__dot">.</span>
                            </h3>
                        </a>
                    </div>


                    <!-- LINKS -->
                    <div class="top__nav__links nav-links">
                        <ul class="top__nav__links__list">
                            <a href="#about" class="top__nav__links__list__a"><li class="top__nav__links__list__a__item">about</li></a>
                            <a href="#skills" class="top__nav__links__list__a"><li class="top__nav__links__list__a__item">skills</li></a>
                            <a href="#projects" class="top__nav__links__list__a"><li class="top__nav__links__list__a__item">projects</li></a>
                            <a href="#contact" class="top__nav__links__list__a"><li class="top__nav__links__list__a__item">contact</li></a>
                        </ul>
                    </div>


                    <!-- BURGER -->
                    <div class="top__nav__burger burger">
                        <div class="top__nav__burger__dash top__nav__burger__line1 line1"></div>
                        <div class="top__nav__burger__dash top__nav__burger__line2 line2"></div>
                        <div class="top__nav__burger__dash top__nav__burger__line3 line3"></div>
                    </div>
                </nav>


                <header class="top__header">
                    <div class="top__header__flexcontainer">
                        <div class="top__header__flexcontainer__right">
                            <div class="top__header__flexcontainer__right__karel">
                                <img src="{{ url('img/karel1.png') }}" alt="img placeholder" class="top__header__flexcontainer__right__karel__img">
                            </div>
                        </div>

                        <div class="top__header__flexcontainer__left">
                            <div class="top__header__flexcontainer__left__titles">
                                <h1 class="top__header__flexcontainer__left__titles__h1">Hi, I'm Karel Decoene</h1>
                                <h2 class="top__header__flexcontainer__left__titles__h2">NxT web developer</h2>
                            </div>

                            <div class="top__header__flexcontainer__left__ctas">
                                <a href="#projects" class="top__header__flexcontainer__left__ctas__background__projects"><div class="top__header__flexcontainer__left__ctas__background">my projects <i class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                                <a href="#contact" class="top__header__flexcontainer__left__ctas__background__contact"><div class="top__header__flexcontainer__left__ctas__background" id="contactButton">contact me <i class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                            </div>

                            <div class="top__header__flexcontainer__left__ctas2">
                                <div class="top__header__flexcontainer__left__ctas2__downloadcv">
                                    <a href="#" class="top__header__flexcontainer__left__ctas2__downloadcv__button">download my cv</a>
                                </div>

                                <div class="top__header__flexcontainer__left__ctas2__socials">
                                    <div class="top__header__flexcontainer__left__ctas2__socials__background"><a href="https://www.instagram.com/kareldecoene/" class="top__header__flexcontainer__left__ctas2__socials__background__a"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                                    <div class="top__header__flexcontainer__left__ctas2__socials__background"><a href="https://www.facebook.com/karel.decoene.5/" class="top__header__flexcontainer__left__ctas2__socials__background__a"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                                    <div class="top__header__flexcontainer__left__ctas2__socials__background"><a href="https://www.linkedin.com/in/karel-decoene-395478187/" class="top__header__flexcontainer__left__ctas2__socials__background__a"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="top__header__scrolldown">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </div>
                </header>
            </div>
            <!-- END HEADER -->


            <!-- BEGIN ABOUT -->
            <div class="about" id="about">
                <div class="about__titlesection">
                    <h4 class="about__titlesection__h4">ABOUT ME</h4>
                    <div class="about__titlesection__dash"></div>
                </div>

                <div class="about__flexcontainer">
                    <p class="about__flexcontainer__p">
                        Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met.<br><br>
                        Letters nam en ze door elkaar husselde om een font-catalogus te maken.
                    </p>

                    <img src="{{ url('img/front_shop.jpg') }}" alt="img placeholder" class="about__flexcontainer__img">
                </div>
            </div>
            <!-- END ABOUT -->


            <!-- BEGIN SKILLS -->
            <div class="skills" id="skills">
                <div class="skills__titlesection">
                    <h4 class="skills__titlesection__h4">SKILLS</h4>
                    <div class="skills__titlesection__dash"></div>
                </div>

                <div class="skills__items">
                    <!-- SKILL -->
                    <div class="skills__items__item" id="skill1">
                        <div class="skills__items__item__left">
                            <h5 class="skills__items__item__h5">web development</h5>

                            <div class="skills__items__item__tags">
                                <span class="skills__items__item__tags__tag">HTML</span>
                                <span class="skills__items__item__tags__tag">CSS</span>
                                <span class="skills__items__item__tags__tag">JS</span>
                                <span class="skills__items__item__tags__tag">PHP</span>
                                <span class="skills__items__item__tags__tag">SQL</span>
                                <span class="skills__items__item__tags__tag">SASS</span>
                                <span class="skills__items__item__tags__tag">C#</span>
                                <span class="skills__items__item__tags__tag">WORDPRESS</span>
                            </div>

                            <p class="skills__items__item__p">
                                Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst husselde om een font-catalogus te maken. responsive, vindbaar (SEO), performance, ...
                            </p>

                            <h6 class="skills__items__item__h6">learning</h6>

                            <div class="skills__items__item__tags skills__items__item__tags2">
                                <span class="skills__items__item__tags__tag">LARAVEL</span>
                                <span class="skills__items__item__tags__tag">JQUERY</span>
                                <span class="skills__items__item__tags__tag">BOOTSTRAP</span>
                            </div>
                        </div>

                        <div class="skills__items__item__right">
                            <div class="skills__items__item__right__container">
                                <img src="{{ url('img/webdevelopment_icon.png') }}" alt="icon image" class="skills__items__item__right__icon">
                            </div>
                        </div>
                    </div>


                    <!-- SKILL -->
                    <div class="skills__items__item" id="skill2">
                        <div class="skills__items__item__left">
                            <h5 class="skills__items__item__h5">web design</h5>

                            <div class="skills__items__item__tags">
                                <span class="skills__items__item__tags__tag">XD</span>
                                <span class="skills__items__item__tags__tag">PHOTOSHOP</span>
                                <span class="skills__items__item__tags__tag">ILLUSTRATOR</span>
                                <span class="skills__items__item__tags__tag">LIGHTROOM</span>
                                <span class="skills__items__item__tags__tag">UX</span>
                                <span class="skills__items__item__tags__tag">UI</span>
                            </div>

                            <p class="skills__items__item__p__extra">
                                Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst husselde om een font-catalogus te maken. responsive, vindbaar (SEO), performance, ...
                            </p>
                        </div>

                        <div class="skills__items__item__right__3">
                            <div class="skills__items__item__right__2__container">
                                <img src="{{ url('img/webdesign_icon.png') }}" alt="icon image" class="skills__items__item__right__icon">
                            </div>
                        </div>
                    </div>


                    <!-- SKILL -->
                    <div class="skills__items__item" id="skill3">
                        <div class="skills__items__item__left">
                            <h5 class="skills__items__item__h5">branding</h5>

                            <div class="skills__items__item__tags">
                                <span class="skills__items__item__tags__tag">LOGO</span>
                                <span class="skills__items__item__tags__tag">BUSINESS CARD</span>
                                <span class="skills__items__item__tags__tag">FLYER</span>
                            </div>

                            <p class="skills__items__item__p__extra">
                                Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst husselde om een font-catalogus te maken. responsive, vindbaar (SEO), performance, ...
                            </p>
                        </div>

                        <div class="skills__items__item__right__2">
                            <div class="skills__items__item__right__2__container">
                                <img src="{{ url('img/branding_icon.png') }}" alt="icon image" class="skills__items__item__right__icon">
                            </div>
                        </div>
                    </div>


                    <!-- SKILL -->
                    <div class="skills__items__item" id="skill4">
                        <div class="skills__items__item__left">
                            <h5 class="skills__items__item__h5">content</h5>

                            <div class="skills__items__item__tags">
                                <span class="skills__items__item__tags__tag">PHOTO</span>
                                <span class="skills__items__item__tags__tag">VIDEO</span>
                                <span class="skills__items__item__tags__tag">SOCIAL MEDIA</span>
                            </div>

                            <p class="skills__items__item__p__extra">
                                Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst husselde om een font-catalogus te maken. responsive, vindbaar (SEO), performance, ...
                            </p>
                        </div>

                        <div class="skills__items__item__right__2">
                            <div class="skills__items__item__right__2__container">
                                <img src="{{ url('img/content_icon.png') }}" alt="icon image" class="skills__items__item__right__icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SKILLS -->

             
            <!-- BEGIN PROJECTS -->
            <div class="projects" id="projects">
                <div class="projects__titlesection">
                    <h4 class="projects__titlesection__h4">PROJECTS</h4>
                    <div class="projects__titlesection__dash"></div>
                </div>


                <div class="projects__items">
                    <!-- PROJECT -->
                    <div class="projects__items__item" id="project1">
                        <div class="projects__items__item__image">
                            <img src="{{url('img/SFE.webp')}}" alt="img placeholder" class="projects__items__item__image__img">
                        </div>

                        <h5 class="projects__items__item__h5">content & social media</h5>

                        <p class="projects__items__item__p">
                            Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door.
                        </p>

                        <a href="https://www.instagram.com/supercarsfromeverywhere/" class="projects__items__item__button__extra">
                            <i class="fa fa-instagram" aria-hidden="true"></i> instagram
                        </a>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items__item" id="project2">
                        <div class="projects__items__item__image">
                            <img src="{{url('img/PO.webp')}}" alt="img placeholder" class="projects__items__item__image__img">
                        </div>

                        <h5 class="projects__items__item__h5">website & content</h5>

                        <p class="projects__items__item__p">
                            Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door.
                        </p>

                        <a href="https://www.instagram.com/presentonline_websites/" class="projects__items__item__button__extra"><i class="fa fa-instagram" aria-hidden="true"></i> instagram</a>
                        <a href="https://presentonline.karel.decoene.nxtmediatech.eu/overOns.php#" class="projects__items__item__button"><i class="fa fa-globe" aria-hidden="true"></i> website</a>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items__item" id="project3">
                        <div class="projects__items__item__image">
                            <img src="{{url('img/TB.webp')}}" alt="img placeholder" class="projects__items__item__image__img">
                        </div>

                        <h5 class="projects__items__item__h5">web design & development</h5>

                        <p class="projects__items__item__p">
                            Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door.
                        </p>

                        <a href="https://theboxverhuizingen.be/home" class="projects__items__item__button"><i class="fa fa-globe" aria-hidden="true"></i> website</a>
                        <a href="https://github.com/kareldecoeneKDG/the-box-verhuizingen2" class="projects__items__item__button"><i class="fa fa-github" aria-hidden="true"></i> github</a>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items__item" id="project4">
                        <div class="projects__items__item__image">
                            <img src="{{url('img/ES.webp')}}" alt="img placeholder" class="projects__items__item__image__img">
                        </div>

                        <h5 class="projects__items__item__h5">web design & development</h5>

                        <p class="projects__items__item__p">
                            Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door.
                        </p>

                        <a href="https://esportsplus.pieter.vanvalckenborgh.nxtmediatech.eu/" class="projects__items__item__button"><i class="fa fa-globe" aria-hidden="true"></i> website</a>
                        <a href="https://github.com/kareldecoeneKDG/esportsPlus" class="projects__items__item__button"><i class="fa fa-github" aria-hidden="true"></i> github</a>
                    </div>
                </div>
            </div>
            <!-- END PROJECTS -->


            <!-- BEGIN CONTACT -->
            <div class="contact" id="contact">
                <div class="contact__titlesection">
                    <h4 class="contact__titlesection__h4">GET IN TOUCH</h4>
                    <div class="contact__titlesection__dash"></div>
                </div>

                <div class="contact__formsection">
                    <!-- FORM -->
                    <form class="contact__formsection__form">
                        <input type="text" name="name" placeholder="name" class="contact__formsection__form__input">
                        <input type="text" name="email" placeholder="email" class="contact__formsection__form__input">
                        <textarea name="message" placeholder="message" class="contact__formsection__form__textarea"></textarea>

                        <input type="submit" value="send" class="contact__formsection__form__submit">
                    </form>

                    <div class="contact__formsection__karel">
                        <img src="{{ url('img/karel2.png') }}" alt="img placeholder" class="contact__formsection__karel__img">
                    </div>
                </div>
            </div>
            <!-- END CONTACT -->


            <!-- BEGIN FOOTER -->
            <footer class="footer">
                <div class="footer__brand">
                    <h3 class="footer__brand__h3">KAREL.</h3>

                    <div class="footer__brand__upsection">
                        <a href="#container" class="footer__brand__upsection__background__icon"><div class="footer__brand__upsection__background"><i class="fa fa-arrow-up" aria-hidden="true"></i></div></a>
                    </div>

                    <div class="footer__brand__socials">
                        <div class="footer__brand__socials__background"><a href="https://www.instagram.com/kareldecoene/" class="footer__brand__socials__background__a"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                        <div class="footer__brand__socials__background"><a href="https://www.facebook.com/karel.decoene.5/" class="footer__brand__socials__background__a"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                        <div class="footer__brand__socials__background"><a href="https://www.linkedin.com/in/karel-decoene-395478187/" class="footer__brand__socials__background__a"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
                        <div class="footer__brand__socials__background"><a href="https://github.com/kareldecoeneKDG/portfolio-website" class="footer__brand__socials__background__a"><i class="fa fa-github" aria-hidden="true"></i></a></div>
                    </div>
                </div>


                <div class="footer__linksection">
                    <h4 class="footer__linksection__h4">LINKS</h4>

                    <div class="footer__linksection__links">
                        <a href="#container" class="footer__linksection__links__link">home</a>
                        <a href="#about" class="footer__linksection__links__link">about</a>
                        <a href="#skills" class="footer__linksection__links__link">skills</a>
                        <a href="#projects" class="footer__linksection__links__link">projects</a>
                        <a href="#contact" class="footer__linksection__links__link">contact</a>
                    </div>
                </div>


                <div class="footer__contactsection">
                    <h4 class="footer__contactsection__h4">CONTACT</h4>

                    <div class="footer__contactsection__links">
                        <a href="#" class="footer__contactsection__links__link">karel.decoene@hotmail.com</a>
                        <a href="#" class="footer__contactsection__links__link">0476 28 09 02</a>
                    </div>

                </div>

                <div class="footer__brand__upsection2">
                    <a href="#container" class="footer__brand__upsection2__background__icon"><div class="footer__brand__upsection2__background"><i class="fa fa-arrow-up" aria-hidden="true"></i></div></a>
                </div>
            </footer>
            <!-- END FOOTER -->
        </div>

        <script src="{{ url('js/burger.js') }}"></script>
    </body>
</html>
