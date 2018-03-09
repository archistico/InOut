<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="row">
        <div class="col-sm">
            <a href="/" class="btn btn-secondary">Nuovo movimento</a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row rowFullHeight">
            <div class="col-sm fullHeight">
                @foreach ($outs as $el)

                    <h2>{{ $el->amount }} &euro;</h2>
                    <h4>{{ $el->date }} | {{ $el->note }}</h4>
                    <p>[ {{ $el->id }} ] {{ $el->macrodescription }} | {{ $el->microdescription }} | {{ $el->minidescription }}</p>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

</div>
</body>
</html>
