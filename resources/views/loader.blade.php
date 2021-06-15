<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- General -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Google Description -->
        <meta name="description" content="Hi, I'm Karel and I'm a student NxT Media Technology at KdG Hogeschool learling Web Development and UX/UI. Welcome to my portfolio website.">

        <!-- Facebook Preview Tags -->
        <meta property="og:title" content="Karel Decoene - NxT Media Technology - Portfolio Website">
        <meta name="og:description" content="Hi, I'm Karel and I'm a student NxT Media Technology at KdG Hogeschool learling Web Development and UX/UI. Welcome to my portfolio website.">
        <meta property="og:image" content="{{ url('img/facebook.png') }}">

        <title>KAREL - NxT Web Developer</title>


        <!-- Fonts -->
            <!-- Google fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&family=Rubik:ital,wght@0,500;0,700;1,400&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

            <!-- Font awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Faveicon -->
        <link rel="shortcut icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">

        <!-- Google reCAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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