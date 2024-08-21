<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('templates.head')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            @include('templates.side')

            @yield('content')

        </div>
    </div>

    @include('templates.footer')
    <script src="{{ asset('js/admin.js') }}"></script>
    @yield('footer')
</body>

</html>