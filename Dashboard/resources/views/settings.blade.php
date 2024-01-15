<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Instellingen</title>
    <link href="{{asset('favicon.ico')}}" rel="favorite icon" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.settings.css') }}" rel="stylesheet">
</head>
<body>
<div class="container bodyContainer">
    <div class="myNavbar">
        @foreach($apps as $app)
            <div class="navEntry" id="app{{$app->appname}}">
                <a href="/settings/{{$app->route}}"><p>{{$app->appname}}</p></a>
            </div>
            @if($app->appname == "Dashboard")
                <script>
                    document.getElementById("app{{$app->appname}}").classList.add("active");
                </script>
            @endif
        @endforeach
    </div>
    <div class="myNavbarLogout">
        <a href="/logout"><p class="myLogoutbtn">Uitloggen</p></a>

    </div>
    <div class="content">
        @yield('content')

    </div>

</div>
</body>
</html>
