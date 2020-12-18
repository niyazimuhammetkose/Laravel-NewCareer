<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar. <br>
    xxxxxxxxxxxxxxxx <br>
    yyyyyyyyyyyyyyyy <br>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
