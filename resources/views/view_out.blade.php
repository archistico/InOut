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

    <div class="container-fluid">
        <div class="row rowFullHeight">
            <div class="col-sm fullHeight">
                @foreach ($outs as $el)

                    <h1>{{ $el->id }}</h1>
                    <p>{{ $el->amount }}</p>

                @endforeach
            </div>
        </div>
    </div>

</div>
</body>
</html>
