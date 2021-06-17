<?php session_start(); ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- General -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts AFBLIJVEN? -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Google Description -->
        <meta name="description" content="Hi, I'm Karel and I'm a student NxT Media Technology at KdG Hogeschool learling Web Development and UX/UI. Welcome to my portfolio website.">

        <!-- Facebook Preview Tags -->
        <meta property="og:title" content="Karel Decoene - NxT Media Technology - Portfolio Website">
        <meta name="og:description" content="Hi, I'm Karel and I'm a student NxT Media Technology at KdG Hogeschool learling Web Development and UX/UI. Welcome to my portfolio website.">
        <meta property="og:image" content="{{ URL::asset('../../public/img/facebook.png') }}">

        <title>KAREL - NxT Web Developer</title>


        <!-- Fonts -->
            <!-- Google fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&family=Rubik:ital,wght@0,500;0,700;1,400&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

            <!-- Font awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Styles -->
        <link href="{{ URL::asset('../../public/css/style.css') }}" rel="stylesheet">

        <!-- Faveicon -->
        <link rel="shortcut icon" href="{{ URL::asset('../../public//img/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ URL::asset('../../public/img/favicon.ico') }}" type="image/x-icon">

        <!-- Google reCAPTCHA
        <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    </head>



    <body>
        <div class="container" id="container">
            
            
            <!-- BEGIN TOP -->
            <div class="top">

                <!-- BEGIN NAV -->
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
                <!-- END NAV -->


                <!-- BEGIN HEADER -->
                <header class="top__header">
                    <div class="top__header__flexcontainer">
                        <div class="top__header__flexcontainer__right">
                            <div class="top__header__flexcontainer__right__karel">
                                <img src="{{ URL::asset('../../public/img/karel_1.webp') }}" alt="img placeholder" class="top__header__flexcontainer__right__karel__img">
                            </div>
                        </div>

                        <div class="top__header__flexcontainer__left">
                            <div class="top__header__flexcontainer__left__titles">
                                <h1 class="top__header__flexcontainer__left__titles__h1">Hi, I'm Karel Decoene</h1>
                                <h2 class="top__header__flexcontainer__left__titles__h2">NxT web developer</h2>
                            </div>

                            <div class="top__header__flexcontainer__left__ctas">
                                <a href="#projects" class="top__header__flexcontainer__left__ctas__background__a"><div class="top__header__flexcontainer__left__ctas__background"><span>my projects</span> <i class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                                <a href="#contact" class="top__header__flexcontainer__left__ctas__background__a"><div class="top__header__flexcontainer__left__ctas__background" id="contactButton"><span>contact me</span> <i class="fa fa-angle-right" aria-hidden="true"></i></div></a>
                            </div>

                            <div class="top__header__flexcontainer__left__ctas2">
                                <div class="top__header__flexcontainer__left__ctas2__downloadcv">
                                    <a href="{{ url('pdf/KarelDecoene_CV.pdf') }}" class="top__header__flexcontainer__left__ctas2__downloadcv__button" download>download my cv</a>
                                </div>

                                <div class="top__header__flexcontainer__left__ctas2__socials">
                                    <div class="top__header__flexcontainer__left__ctas2__socials__background"><a href="https://www.instagram.com/kareldecoene/" class="top__header__flexcontainer__left__ctas2__socials__background__a"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                                    <div class="top__header__flexcontainer__left__ctas2__socials__background"><a href="https://www.facebook.com/karel.decoene.5/" class="top__header__flexcontainer__left__ctas2__socials__background__a"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                                    <div class="top__header__flexcontainer__left__ctas2__socials__background"><a href="https://www.linkedin.com/in/karel-decoene-395478187/" class="top__header__flexcontainer__left__ctas2__socials__background__a"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#about">
                        <div class="scrolldown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </header>
                <!-- BEGIN HEADER -->

            </div>
            <!-- END TOP -->


            <!-- BEGIN ABOUT -->
            <div class="about" id="about">
                <div class="about__titlesection">
                    <h4 class="about__titlesection__h4">ABOUT ME</h4>
                    <div class="about__titlesection__dash"></div>
                </div>

                <div class="about__flexcontainer">
                    <p class="about__flexcontainer__p">
                    Hi there, my name is Karel Decoene. I’m 20 y/o and living in Antwerp. Since I was 16 I’ve been very interested in creating online content, especially websites.<br><br>
                    I’m currently in my 2nd year of college and I’m studying <strong>NxT Media Technology</strong> with a focus on #webdevelopment at the <strong>KdG Hogeschool</strong> in Hoboken.

                    </p>

                    <img src="{{ URL::asset('../../public/img/about.webp') }}" alt="img placeholder" class="about__flexcontainer__img">
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
                                <span class="skills__items__item__tags__tag">GIT</span>
                            </div>

                            <p class="skills__items__item__p">
                            I create <strong>responsive</strong> websites with a #data-driven focus on #SEO and #performance. I usually make these manually using the above (programming)languages.<br><br>
                            In addition, I learn to work with <strong>CMS systems and frameworks</strong> such as #wordpress, #laravel, & more.
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
                                <img src="{{ URL::asset('../../public/img/development.svg') }}" alt="icon image" class="skills__items__item__right__icon">
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
                                Every well-performing website starts with an attractive and <strong>user-friendly atomic design</strong>. In my designs the focus lies on user experience <strong>#UX</strong> & a goodlooking interface <strong>#UI</strong>.<br><br>
                                This allows you to create #interaction with your #visitors and generate more <strong>(online) sales</strong> as a company.
                            </p>
                        </div>

                        <div class="skills__items__item__right__3">
                            <div class="skills__items__item__right__3__container">
                                <img src="{{ URL::asset('../../public/img/design.svg') }}" alt="icon image" class="skills__items__item__right__icon">
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
                                A company needs a beautiful & recognizable #branding. Using the #Adobe applications I design <strong>logos, business cards & more</strong> for companies and organizations. Questions? Do not hesitate to contact me.
                            </p>
                        </div>

                        <div class="skills__items__item__right__2">
                            <div class="skills__items__item__right__2__container">
                                <img src="{{ URL::asset('../../public/img/branding.svg') }}" alt="icon image" class="skills__items__item__right__icon">
                            </div>
                        </div>
                    </div>


                    <!-- SKILL -->
                    <div class="skills__items__item" id="skill4">
                        <div class="skills__items__item__left">
                            <h5 class="skills__items__item__h5">content</h5>

                            <div class="skills__items__item__tags">
                                <span class="skills__items__item__tags__tag">PHOTOS</span>
                                <span class="skills__items__item__tags__tag">SOCIAL MEDIA</span>
                            </div>

                            <p class="skills__items__item__p__extra">
                                In addition to #websites, I often make photos and #content for <strong>social media</strong>.<br><br>
                                This can range from taking <strong>product photos</strong> to writing a #blogpost. Be sure to check out my social media!
                            </p>
                        </div>

                        <div class="skills__items__item__right__2">
                            <div class="skills__items__item__right__2__container">
                                <img src="{{ URL::asset('../../public/img/content.svg') }}" alt="icon image" class="skills__items__item__right__icon">
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
                        <div>
                            <div class="projects__items__item__image">
                                <img src="{{ URL::asset('../../public/img/SFE.webp')}}" alt="img placeholder" class="projects__items__item__image__img">
                            </div>

                            <h5 class="projects__items__item__h5">content & social media</h5>

                            <p class="projects__items__item__p">
                                Supercars From Everywhere is an account on #Instagram where I share photos of mainly exotic cars.<br><br>
                                For me it was mainly about building a <strong>following</strong> and sharing my <strong>passion</strong> with others. The website is build using Wordpress (first time for me) and was just an experiment.
                            </p>
                        </div>

                        <div>
                            <a href="https://www.instagram.com/supercarsfromeverywhere/" class="projects__items__item__button__extra"><i class="fa fa-instagram" aria-hidden="true"></i> instagram</a>
                            <a href="https://wordpress1.karel.decoene.nxtmediatech.eu/" class="projects__items__item__button"><i class="fa fa-globe" aria-hidden="true"></i> website</a>
                        </div>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items__item" id="project2">
                        <div>
                            <div class="projects__items__item__image">
                                <img src="{{ URL::asset('../../public/img/PO.webp')}}" alt="img placeholder" class="projects__items__item__image__img">
                            </div>

                            <h5 class="projects__items__item__h5">website & content</h5>

                            <p class="projects__items__item__p">
                                When I was 17 years old, I wanted to start making websites for companies. If only I knew back then that you have to know more than just basic #HTML & #CSS.<br><br>
                                In any case, the <strong>mindset</strong> was there. I made a simple website that was absolutely garbage but I definitely learned a lot with it.
                            </p>
                        </div>

                        <div>
                            <a href="https://www.instagram.com/presentonline_websites/" class="projects__items__item__button__extra"><i class="fa fa-instagram" aria-hidden="true"></i> instagram</a>
                            <a href="https://presentonline.karel.decoene.nxtmediatech.eu/index.php" class="projects__items__item__button"><i class="fa fa-globe" aria-hidden="true"></i> website</a>
                        </div>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items__item" id="project3">
                        <div>
                            <div class="projects__items__item__image">
                                <img src="{{ URL::asset('../../public/img/TB.webp')}}" alt="img placeholder" class="projects__items__item__image__img">
                            </div>

                            <h5 class="projects__items__item__h5">web design & development</h5>

                            <p class="projects__items__item__p">
                                In Feb. 2021 I had the chance to create my first website for a company. This gave me the opportunity to put my fresh knowledge (#Laravel, #Sass, #BEM, …) to the test.<br><br>
                                It took me a few weeks from design to website, but in the end I'm relatively happy with the result. There's still a lot of room for <strong>improvement</strong> though!
                            </p>
                        </div>

                        <div>
                            <a href="https://theboxverhuizingen.be/home" class="projects__items__item__button"><i class="fa fa-globe" aria-hidden="true"></i> website</a>
                            <a href="https://github.com/kareldecoeneKDG/the-box-verhuizingen2" class="projects__items__item__button"><i class="fa fa-github" aria-hidden="true"></i> github</a>
                        </div>
                    </div>


                    <!-- PROJECT -->
                    <div class="projects__items__item" id="project4">
                        <div>
                            <div class="projects__items__item__image">
                                <img src="{{ URL::asset('../../public/img/ES.webp')}}" alt="img placeholder" class="projects__items__item__image__img">
                            </div>

                            <h5 class="projects__items__item__h5">web design & development</h5>

                            <p class="projects__items__item__p">
                                In my second year of college we worked on a fictional company called <strong>Esport+</strong>. This was a streaming platform like #Twitch but better.<br><br>
                                This was a project in collaboration with #Telenet / #LibertyGlobal and we made a website for it, among other things. The website was build with the help of others and we've used a bootstrap template.
                            </p>
                        </div>

                        <div>
                            <a href="https://esportsplus.karel.decoene.nxtmediatech.eu/" class="projects__items__item__button"><i class="fa fa-globe" aria-hidden="true"></i> website</a>
                            <a href="https://github.com/kareldecoeneKDG/esportsPlus" class="projects__items__item__button"><i class="fa fa-github" aria-hidden="true"></i> github</a>
                        </div>
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

                    <!--
                    <form action="/home/#contact" method="POST" class="contact__formsection__form">
                        <strong>
                            @foreach ($errors->all() as $error)
                            {{ $error }}<br />
                            @endforeach
                        </strong>

                        @if(session()->has('message'))
                            <div class="contact__formsection__form__succesmessage">
                                <strong>{{ session()->get('message') }}</strong>
                            </div>
                        @endif

                        @if(Session::has('flashMessage'))
                            <div class="alert alert-danger">
                                {{ Session::get('flashMessage') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <div class="contact__formsection__form__errormessage">{{ $errors->first('name') }}</div>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="name" class="contact__formsection__form__input form-control">
                        </div>

                        <div class="form-group">
                            <div class="contact__formsection__form__errormessage">{{ $errors->first('email') }}</div>
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="email" class="contact__formsection__form__input form-control">
                        </div>

                        <div class="form-group">
                            <div class="contact__formsection__form__errormessage">{{ $errors->first('message') }}</div>
                            <textarea name="message" placeholder="message" class="contact__formsection__form__textarea">{{ old('message') }}</textarea>
                        </div>

                        <div class="g-recaptcha contact__formsection__form__checkbox form-control" data-sitekey="6LfO8SMbAAAAAD1Gow31-m_lzq84T1K9R3-Fi-Kd"></div>

                        @csrf

                        <input type="submit" value="send" class="contact__formsection__form__submit">
                    </form>
                    -->
                    <div class="contact__formsection__flexcontainer">
                        <div class="contact__formsection__flexcontainer__text">
                            I’m currently not registered as a company but I'm always looking for new challenges. Do not hesitate to contact me if you are looking for a logo, website & more. For me this is the best way to learn and at the same time a cheap solution
                            for your company.<br><br>

                            Furthermore I’m still looking for a company where I can do an <strong>internship</strong> next year. Are you a fan of my work and do you see opportunities? Feel free to leave me a message.
                        </div>

                        <div class="contact__formsection__flexcontainer__contactlinks">
                            <a href="tel:+32476280902" class="contact__formsection__flexcontainer__contactlinks__link">0476 28 09 02</a>
                            <a href="mailto:karel.decoene@hotmail.com" class="contact__formsection__flexcontainer__contactlinks__link">karel.decoene@hotmail.com</a>
                        </div>
                    </div>

                    <div class="contact__formsection__karel">
                        <img src="{{ URL::asset('../../public/img/karel_2.webp') }}" alt="img placeholder" class="contact__formsection__karel__img">
                    </div>
                </div>
            </div>
            <!-- END CONTACT -->


            <!-- BEGIN FOOTER -->
            <footer class="footer">


                <!-- BEGIN BRAND -->
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
                <!-- END BRAND -->


                <!-- BEGIN LINKS -->
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
                <!-- END LINKS -->


                <!-- BEGIN CONTACT LINKS -->
                <div class="footer__contactsection">
                    <h4 class="footer__contactsection__h4">CONTACT</h4>

                    <div class="footer__contactsection__links">
                        <a href="mailto:karel.decoene@hotmail.com" class="footer__contactsection__links__link">karel.decoene@hotmail.com</a>
                        <a href="tel:+32476280902" class="footer__contactsection__links__link">0476 28 09 02</a>
                    </div>
                </div>
                <!-- END CONTACT LINKS -->


                <div class="footer__brand__upsection2">
                    <a href="#container" class="footer__brand__upsection2__background__icon"><div class="footer__brand__upsection2__background"><i class="fa fa-arrow-up" aria-hidden="true"></i></div></a>
                </div>


            </footer>
            <!-- END FOOTER -->
        </div>


        <!-- JAVASCRIPT MOBILE NAV -->
        <script src="{{ URL::asset('../../public/js/burger.js') }}"></script>
    </body>
</html>