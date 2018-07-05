<!DOCTYPE html>
<html>
<head>
    <title>@section('title', 'The Institutes')</title>
</head>
<body>
    <div class="header">
        <div class="logo">@section('logo', 'The Institutes')</div>
    </div>

    <div class="nav">
        @include('nav.php')
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
