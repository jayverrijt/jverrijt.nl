@extends('settings')

@section('content')
    <script src="{{asset('js/dashboardsettings.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/dashboardsettings.css') }}">
    <div class="container contentContainer">
        <div class="container contentContainerLeft">
            <div id="settingsIcon" class="settingsHolder show">
                <span onclick="toSettings()" class="cogWheel">&#9881;</span>
            </div>
            <div id="backIcon" class="settingsHolder hidden">
                <span onclick="goBack()" class="goBack">&#8592;</span>

            </div>
            @foreach($selapps as $selapp)
                <div class="contDashBuild">
                    <div class="contDashBuildInfo show" id="dashEntry{{$selapp->appname}}">
                        <div class="contDashBuildName">
                            <p>{{$selapp->appname}}</p>
                        </div>
                        <div class="contDashBuildDescription">
                            <p>{{$selapp->description}}</p>
                        </div>
                    </div>
                    <div class="contDashBuildSettings hidden">

                    </div>
                </div>
            @endforeach
        </div>
        <div class="container contentContainerRight"></div>
    </div>
@endsection
