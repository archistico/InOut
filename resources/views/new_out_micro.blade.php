<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .rowFullHeight {
            height:100vh;
        }

        .fullHeight {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="container-fluid">
        <div class="row rowFullHeight">
            <div class="col-sm fullHeight">
                @foreach ($micro as $sub)

                        <a class="btn btn-dark btn-lg btn-block fullHeight" href="/new/{{ $subdivision }}/{{ $macro }}/{{ $sub->id }}">{{ $sub->description }}</a>

                @endforeach
            </div>
        </div>
    </div>

</div>
</body>
</html>
