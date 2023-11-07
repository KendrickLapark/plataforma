<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @auth
        <link rel="stylesheet" href="{{ asset('css/common/baseDashboards.css')}}">
    @else
        <link rel="stylesheet" href="css/common/base.css">
    @endauth

    @yield('styles')
    <title> @yield('title') </title>
</head>
<body>
    <header>
        @guest
            @include('layouts._partials.menu')
            @include('layouts._partials.message')
        @endguest
    </header>
    
    <main>

        <aside>
            @auth
                @include('layouts._partials.leftbar')
            @endauth
        </aside>

        @yield('content')
    </main>

    @yield('scripts')
</body>
</html>