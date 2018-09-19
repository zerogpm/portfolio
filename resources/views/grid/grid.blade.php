<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <title>Grid System</title>
</head>
<body>

<section class="grid-test">
    <div class="row">
        <div class="col-1-of-2">
            Col 1 of 2
        </div>
        <div class="col-1-of-2">
            Col 1 of 2
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-2-of-3">
            Col 2 of 3
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-2-of-4">
            Col 2 of 4
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-3-of-4">
            Col 3 of 4
        </div>
    </div>
</section>
</body>
</html>
