<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link href="{{ asset('/css/icon-font.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <title>Natours | Exciting tours for adventurous people</title>
</head>
<body>
<header class="header">
    <div class="header__logo-box">
        <img src="{{ asset('/img/logo-white.png') }}" alt="Logo" class="header__logo">
    </div>

    <div class="header__text-box">
        <h1 class="header-primary">
            <span class="header-primary--main">OutDoors</span>
            <span class="header-primary--sub">is where life happens</span>
        </h1>
        <a href="#" class="btn btn--white btn--animated">Discover our tours</a>
    </div>
</header>
<main>
    <section class="section-about">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Exciting tours for adventurous people
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-2">
                <h3 class="heading-tertiary u-margin-bottom-small">
                    you are going to fall in love with nature
                </h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                    cupiditate dicta, dolores dolorum eos hic incidunt minima, qui quia soluta sunt tempore totam veniam
                    vitae voluptate?
                </p>

                <h3 class="heading-tertiary u-margin-bottom-small">
                    Live adventures like you never have before
                </h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>

                <a href="#" class="btn-text">Learn more &rarr;</a>
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                    <img src="{{ asset('img/nat-1-large.jpg') }}" alt="Photo 1" class="composition__photo composition__photo--p1">
                    <img src="{{ asset('img/nat-2-large.jpg') }}" alt="Photo 2" class="composition__photo composition__photo--p2">
                    <img src="{{ asset('img/nat-3-large.jpg') }}" alt="Photo 3" class="composition__photo composition__photo--p3">
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
