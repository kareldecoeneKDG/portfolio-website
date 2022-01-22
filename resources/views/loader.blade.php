<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Change to welcome page -->
        <meta http-equiv="refresh" content="3; URL=http://kareldecoene.be/home"/>

        <!-- General -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">





        <!-- Scripts AFBLIJVEN? -> VOOR FORM??? -->
        <script src="{{ asset('js/app.js') }}" defer></script>






        <!-- Google Description -->
        <meta name="description" content="Hi, I'm Karel and I'm a student NxT Media Technology at KdG Hogeschool learning Web Development and UX/UI. Welcome to my portfolio website.">

        <!-- Facebook Preview Tags -->
        <meta property="og:title" content="Karel Decoene - NxT Media Technology - Portfolio Website">
        <meta name="og:description" content="Hi, I'm Karel and I'm a student NxT Media Technology at KdG Hogeschool learning Web Development and UX/UI. Welcome to my portfolio website.">
        <meta name="image" property="og:image" content="{{ URL::asset('../../public/img/facebook.png') }}">

        <!-- LinkedIn Preview Tag -->
        <meta name="author" content="Karel Decoene">
        <!--<meta content="https://kareldecoene.be/img/facebook.png" property="og:image" name="image">-->
        <meta content="1200" property="og:image:width">
        <meta content="630" property="og:image:height">
        <meta property="og:type" content="website">

        <!-- Twitter/Linkedin -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Karel Decoene - NxT Media Technology - Portfolio Website" />
        <meta name="twitter:site" content="kareldecoenebe" />
        <meta name="twitter:creator" content="kareldecoene">
        <meta name="twitter:image" content="{{ URL::asset('../../public/img/facebook.png') }}">

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

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y9CKLTZQV5"></script>

        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-Y9CKLTZQV5');
        </script>
    </head>



    <body>
        <div class="box">
            <div class="b b1"></div>
            <div class="b b2"></div>
            <div class="b b3"></div>
            <div class="b b4"></div>
        </div>
    </body>
</html>