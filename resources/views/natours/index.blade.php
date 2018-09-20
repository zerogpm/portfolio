<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link href="{{ asset('/css/natours-vender-css/icon-font.css') }}" rel="stylesheet" type="text/css">
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

    <div class="section-features">
        <div class="row">
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima,
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima,
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima,
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-heart"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Live a healthy life</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima,
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="section-tours">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Most popular tours
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">The Sea Explorer</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>3 day tours</li>
                                <li>Up to 30 people</li>
                                <li>2 tour guides</li>
                                <li>Sleep in cozy hotels</li>
                                <li>Difficulty: easy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$297</p>
                            </div>
                            <a href="#" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--2">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--2">The FOREST HIKER</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>7 day tours</li>
                                <li>Up to 40 people</li>
                                <li>6 tour guides</li>
                                <li>Sleep in provided tents</li>
                                <li>Difficulty: medium</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-2">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$499</p>
                            </div>
                            <a href="#" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--3">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--3">The Snow Adventurer</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>5 day tours</li>
                                <li>Up to 15 people</li>
                                <li>3 tour guides</li>
                                <li>Sleep in provided tents</li>
                                <li>Difficulty: hard</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-3">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$899</p>
                            </div>
                            <a href="#" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn btn--green">Discover all tours</a>
        </div>
    </section>

    <section class="section-stories">
        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src="{{asset('img/video.mp4')}}" type="video/mp4">
                <source src="{{ asset('img/video.webm') }}" type="video/webm">
                Your browser is not supported!
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                We make people genuinely happy
            </h2>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="{{ asset('img/nat-8.jpg') }}" alt="Person on a tour" class="story__img">
                    <figcaption class="story__caption">
                        Mary Smith
                    </figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="{{ asset('img/nat-9.jpg') }}" alt="Person on a tour" class="story__img">
                    <figcaption class="story__caption">
                        Jack Wilson
                    </figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">WoW! My life is completely different now.</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci aliquid aspernatur
                        cupiditate dicta, dolores dolorum eos hic incidunt minima.
                    </p>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn-text">Read All Stories &rarr;</a>
        </div>
    </section>
</main>
</body>
</html>
