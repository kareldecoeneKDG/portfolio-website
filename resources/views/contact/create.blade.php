<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- General -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <!-- Google reCAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>



    <body>
        <form action="/contact" method="POST" class="contact__formsection__form">

            @if(session()->has('message'))
                <div>
                    <strong>{{ session()->get('message') }}</strong>
                </div>
            @endif

            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') }}" placeholder="name" class="contact__formsection__form__input form-control">
                <div>{{ $errors->first('name') }}</div>
            </div>

            <div class="form-group">
                <input type="text" name="email" value="{{ old('email') }}" placeholder="email" class="contact__formsection__form__input form-control">
                <div>{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group">
                <textarea name="message" placeholder="message" class="contact__formsection__form__textarea">{{ old('message') }}</textarea>
                <div>{{ $errors->first('message') }}</div>
            </div>

            <div class="g-recaptcha contact__formsection__form__checkbox form-control" data-sitekey="6LfO8SMbAAAAAD1Gow31-m_lzq84T1K9R3-Fi-Kd"></div>

            @csrf

            <input type="submit" value="send message" class="contact__formsection__form__submit">
        </form>
    </body>
</html>