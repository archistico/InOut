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
        <div class="row">
            <div class="col-sm">
                <h1>Dettaglio</h1>
                {{ $subdivision->description }} -
                {{ $macro->description }} -
                {{ $micro->description }} -
                {{ $mini->description }}
                <hr>
                <form method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="0" min="0" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <input type="text" class="form-control" id="note" name="note" placeholder="Note">
                    </div>
                    <div class="form-group">
                        <label for="date">Data</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <button class="btn btn-primary btn-block btn-lg">REGISTRA</button>
                </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>
