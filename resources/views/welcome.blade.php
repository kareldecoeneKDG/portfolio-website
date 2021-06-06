<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- General -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Karel Decoene</title>


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
        <div class="container">


            <!-- BEGIN HEADER -->
            <div class="top">
                <nav class="top__nav">
                    <div class="top__nav__title">
                        <h3 class="top__nav__title__h3">
                            KAREL<span class="top__nav__title__h3__dot">.</span>
                        </h3>
                    </div>

                    <!--
                    <div class="top__nav__links">
                        <ul class="top__nav__links__list">
                            <li class="top__nav__links__list__item">about</li>
                            <li class="top__nav__links__list__item">skills</li>
                            <li class="top__nav__links__list__item">projects</li>
                            <li class="top__nav__links__list__item">contact</li>
                        </ul>
                    </div>
                    -->
                </nav>


                <header class="top__header">
                    <div class="top__header__karel">
                        <img src="{{ url('img/karel1.png') }}" alt="img placeholder" class="top__header__karel__img">
                    </div>

                    <div class="top__header__titles">
                        <h1 class="top__header__titles__h1">Hi, I'm Karel Decoene</h1>
                        <h2 class="top__header__titles__h2">NxT web developer</h2>
                    </div>

                    <div class="top__header__ctas">
                        <div class="top__header__ctas__background"><a href="#" class="top__header__ctas__background__projects">my projects <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                        <div class="top__header__ctas__background"><a href="#" class="top__header__ctas__background__contact">contact me <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>

                    <div class="top__header__ctas2">
                        <div class="top__header__ctas2__downloadcv">
                            <a href="#" class="top__header__ctas2__downloadcv__button">download my cv</a>
                        </div>

                        <div class="top__header__ctas2__socials">
                            <div class="top__header__ctas2__socials__background"><a href="#" class="top__header__ctas2__socials__background__a"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                            <div class="top__header__ctas2__socials__background"><a href="#" class="top__header__ctas2__socials__background__a"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                            <div class="top__header__ctas2__socials__background"><a href="#" class="top__header__ctas2__socials__background__a"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    
                    <div class="top__header__scrolldown">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </div>
                </header>
            </div>
            <!-- END HEADER -->


            <!-- BEGIN ABOUT -->
            <div class="about">
                <div class="about__titlesection">
                    <h4 class="about__titlesection__h4">ABOUT ME</h4>
                    <div class="about__titlesection__dash"></div>
                </div>

                <p class="about__p">
                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met.<br><br>
                    Letters nam en ze door elkaar husselde om een font-catalogus te maken.
                </p>

                <img src="{{ url('img/front_shop.jpg') }}" alt="img placeholder" class="about__img">
            </div>
            <!-- END ABOUT -->


            <!-- BEGIN SKILLS -->
            <div class="skills">
                <div class="skills__titlesection">
                    <h4 class="skills__titlesection__h4">SKILLS</h4>
                    <div class="skills__titlesection__dash"></div>
                </div>

                <div class="skills__items">
                    <!-- SKILL -->
                    <div class="skills__items__item">
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

                        <div class="skills__items__item__background">
                            <img src="{{ url('img/webdevelopment_icon.png') }}" alt="icon image" class="skills__items__item__background__icon">
                        </div>
                    </div>


                    <!-- SKILL -->
                    <div class="skills__items__item">
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

                        <div class="skills__items__item__background__2">
                            <img src="{{ url('img/webdesign_icon.png') }}" alt="icon image" class="skills__items__item__background__icon">
                        </div>
                    </div>


                    <!-- SKILL -->
                    <div class="skills__items__item">
                        <h5 class="skills__items__item__h5">branding</h5>

                        <div class="skills__items__item__tags">
                            <span class="skills__items__item__tags__tag">LOGO</span>
                            <span class="skills__items__item__tags__tag">BUSINESS CARD</span>
                            <span class="skills__items__item__tags__tag">FLYER</span>
                        </div>

                        <p class="skills__items__item__p__extra">
                            Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst husselde om een font-catalogus te maken. responsive, vindbaar (SEO), performance, ...
                        </p>

                        <div class="skills__items__item__background__3">
                            <img src="{{ url('img/branding_icon.png') }}" alt="icon image" class="skills__items__item__background__icon">
                        </div>
                    </div>


                    <!-- SKILL -->
                    <div class="skills__items__item">
                        <h5 class="skills__items__item__h5">content</h5>

                        <div class="skills__items__item__tags">
                            <span class="skills__items__item__tags__tag">PHOTO</span>
                            <span class="skills__items__item__tags__tag">VIDEO</span>
                            <span class="skills__items__item__tags__tag">SOCIAL MEDIA</span>
                        </div>

                        <p class="skills__items__item__p__extra">
                            Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst husselde om een font-catalogus te maken. responsive, vindbaar (SEO), performance, ...
                        </p>

                        <div class="skills__items__item__background__4">
                            <img src="{{ url('img/content_icon.png') }}" alt="icon image" class="skills__items__item__background__icon">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SKILLS -->

             
            <!-- BEGIN PROJECTS -->
            <div class="projects">
                <div class="projects__titlesection">
                    <h4 class="projects__titlesection__h4">PROJECTS</h4>
                    <div class="projects__titlesection__dash"></div>
                </div>


                <div class="projects__items">
                    <!-- PROJECT -->
                    <div class="projects__items__item">
                        <img src="{{url('../../public/img/img_placeholder.png')}}" alt="img placeholder" class="projects__items__item__img">

                        <h5 class="projects__items__item__h5">content & social media</h5>

                        <p class="projects__items__item__p">
                            Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door.
                        </p>

                        <a href="#" class="projects__items__item__button">[icon] instagram</a>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items">
                        <div class="projects__items__item">
                            <img src="{{url('../../public/img/img_placeholder.png')}}" alt="img placeholder" class="projects__items__item__img">

                            <h5 class="projects__items__item__h5">website & content</h5>

                            <p class="projects__items__item__p">
                                Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door.
                            </p>

                            <a href="#" class="projects__items__item__button">[icon] instagram</a>
                        </div>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items">
                        <div class="projects__items__item">
                            <img src="{{url('../../public/img/img_placeholder.png')}}" alt="img placeholder" class="projects__items__item__img">

                            <h5 class="projects__items__item__h5">web design & development</h5>

                            <p class="projects__items__item__p">
                                Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door.
                            </p>

                            <a href="#" class="projects__items__item__button">[icon] website</a>
                            <a href="#" class="projects__items__item__button">[icon] github</a>
                        </div>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items">
                        <div class="projects__items__item">
                            <img src="{{url('../../public/img/img_placeholder.png')}}" alt="img placeholder" class="projects__items__item__img">

                            <h5 class="projects__items__item__h5">web design & development</h5>

                            <p class="projects__items__item__p">
                                Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door.
                            </p>

                            <a href="#" class="projects__items__item__button">[icon] website</a>
                            <a href="#" class="projects__items__item__button">[icon] github</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROJECTS -->


            <!-- BEGIN CONTACT -->
            <div class="contact">
                <div class="contact__titlesection">
                    <h4 class="contact__titlesection__h4">GET IN TOUCH</h4>
                    <div class="contact__titlesection__dash"></div>
                </div>

                <div class="contact__formsection">
                    <img src="{{url('../../public/img/img_placeholder.png')}}" alt="img placeholder" class="contact__formsection__img">

                    <!-- FORM -->
                    <form class="contact__formsection__form">
                        <input type="text" name="name" placeholder="name" class="contact__formsection__form__input">
                        <input type="text" name="email" placeholder="email" class="contact__formsection__form__input">
                        <textarea name="message" placeholder="message" class="contact__formsection__form__textarea"></textarea>

                        <input type="submit" value="send">
                    </form> 
                </div>
            </div>
            <!-- END CONTACT -->


            <!-- BEGIN FOOTER -->
            <footer class="footer">
                <div class="footer__brand">
                    <h3 class="footer__brand__h3">KAREL<span class="footer__brand__h3__dot">.</span></h3>

                    <div class="footer__brand__socials">
                        <div class="footer__brand__socials__background"><a href="#" class="footer__brand__socials__background__instagram">instagram [icon]</a></div>
                        <div class="footer__brand__socials__background"><a href="#" class="footer__brand__socials__background__facebook">facebook [icon]</a></div>
                        <div class="footer__brand__socials__background"><a href="#" class="footer__brand__socials__background__linkedin">linkedin [icon]</a></div>
                    </div>
                </div>


                <div class="footer__linksection">
                    <h4 class="footer__linksection__h4">LINKS</h4>

                    <div class="footer__linksection__links">
                        <a href="#" class="footer__linksection__links__link">home</a>
                        <a href="#" class="footer__linksection__links__link">about</a>
                        <a href="#" class="footer__linksection__links__link">skills</a>
                        <a href="#" class="footer__linksection__links__link">projects</a>
                        <a href="#" class="footer__linksection__links__link">contact</a>
                    </div>
                </div>


                <div class="footer__contactsection">
                    <h4 class="footer__contactsection__h4">CONTACT</h4>

                    <div class="footer__contactsection__links">
                        <a href="#" class="footer__contactsection__links__link">karel.decoene@hotmail.com</a>
                        <a href="#" class="footer__contactsection__links__link">0476 28 09 02</a>
                    </div>

                </div>


                <div class="footer__upsection">
                    <div class="footer__upsection__background"><a href="#" class="footer__upsection__background__icon">[icon]</a></div>
                </div>
            </footer>
            <!-- END FOOTER -->
        </div>
    </body>
</html>
