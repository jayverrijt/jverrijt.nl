<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Dashboard</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container bodyContainer">
            <div class="myNavbar">
                 <nav class="navbar navbar-dark bg-dark">
                     <div class="container-fluid">
                         <span class="navbar-text" style="text-align: center">
                             <p><?=date("D d M Y");?></p>
                         </span>
                     </div>
                 </nav>
            </div>
            <div class="bodyContent">
                <h3 id="appHeader">Applications</h3>
                <div class="contentBuild contentBuildApp">
                    @foreach($apps as $app)
                        @if($app->type == 0)
                            <div class="appHeader">
                                <div class="appHeaderName">
                                    <p>{{$app->appname}}</p>
                                </div>
                                <div class="appHeaderDescription">
                                    <p>{{ $app->description}}</p>
                                </div>
                                <div class="appHeaderLink">
                                    <a href="{{ $app->route}}">Naar {{$app->appname}}</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <h3 id="urlHeader">Links</h3>
                <div class="contentBuild contentBuildURL">
                    @foreach($apps as $app)
                        @if($app->type == 1)
                            <span><div class="appHeader">
                                <div class="appHeaderName">
                                    <p>{{$app->appname}}</p>
                                </div>
                                <div class="appHeaderDescription">
                                    <p>{{ $app->description}}</p>
                                </div>
                                <div class="appHeaderLink">
                                    <a href="{{ $app->route}}">Naar {{$app->appname}}</a>
                                </div>
                                </div></span>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>

