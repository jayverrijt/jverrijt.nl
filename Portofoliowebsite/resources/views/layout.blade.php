<html>
<head>
    <title>Jay</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ URL::to('afb/favicon.png')}}">
</head>
<body>
<div class="myNavbar">
    <ul style="float: right">
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/about">About</a></li>
    </ul>
</div>
<div class="myHeaderBar">
    <div class="myTransparentHolder">
        @yield('header')
    </div>
</div>
<div class="myContent">
    @yield('content')
</div>
</body>
</html>
