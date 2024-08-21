<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('templates.head')
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body>
    

    @yield('content')

    @include('templates.footer')
    <script src="{{ asset('js/front.js') }}"></script>
    @yield('footer')
</body>

</html>