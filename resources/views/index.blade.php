<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .info {
            margin: 0 0 3rem 0;
            font-size: 13px;
        }

        .links>a {
            padding: 0 25px;
            font-size: 16px;
            text-decoration: none;
        }

        .info,
        .links>a {
            color: #636b6f;
            font-weight: 600;
            letter-spacing: .1rem;
            text-transform: uppercase;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title">
                {{config('app.name')}}
            </div>

            <div class="info">
                An open source, free to use uptime monitor.
            </div>

            @if (Route::has('login'))
            <div class="links">
                @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Create account</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</body>

</html>