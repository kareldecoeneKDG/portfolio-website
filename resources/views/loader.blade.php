<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- General -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Change to welcome page -->
        <meta http-equiv="refresh" content="3; url = /"/>


        <title>KAREL</title>


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