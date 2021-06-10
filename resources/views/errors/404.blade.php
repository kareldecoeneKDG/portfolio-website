<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- General -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Error | KAREL - NxT Web Developer</title>


        <!-- Fonts -->
            <!-- Google fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&family=Rubik:ital,wght@0,500;0,700;1,400&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

            <!-- Font awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Styles -->
        <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

        <!-- Faveicon -->
        <link rel="shortcut icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">

        <!-- Google reCAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>



    <body>
        <div class="container" id="container">
            <!-- BEGIN HEADER -->
            <div class="top">
                <nav class="top__nav">


                    <!-- LOGO -->
                    <div class="top__nav__title">
                        <a href="home/#container">
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
                                <img src="{{ url('img/karel_1.webp') }}" alt="img placeholder" class="top__header__flexcontainer__right__karel__img">
                            </div>
                        </div>

                        <div class="top__header__flexcontainer__left">
                            <div class="top__header__flexcontainer__left__titles">
                                <h1 class="top__header__flexcontainer__left__titles__h1">Oooopsss</h1>
                                <h2 class="top__header__flexcontainer__left__titles__h2">Error, deze pagina bestaat niet.</h2>
                            </div>

                            <div class="top__header__flexcontainer__left__ctas2">
                                <div class="top__header__flexcontainer__left__ctas2__downloadcv">
                                    <a href="/home" class="top__header__flexcontainer__left__ctas2__downloadcv__button">Go back to home <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!-- END HEADER -->
        </div>

        <script src="{{ url('js/burger.js') }}"></script>
    </body>
</html>