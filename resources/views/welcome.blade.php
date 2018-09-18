<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

        <title>Natours | Exciting tours for adventurous people</title>
    </head>
    <body>
        <header class="header">
            <div class="header__logo-box">
                <img src="{{ asset('/img/logo-white.png') }}" alt="Logo" class="header__logo-box__logo">
            </div>

            <div class="header__text-box">
                <h1 class="header__text-box__primary">
                    <span class="header__primary__main">OutDoors</span>
                    <span class="header__primary__sub">is where life happens</span>
                </h1>
                <a href="#" class="btn btn-white">Discover our tours</a>
            </div>
        </header>
    </body>
</html>
