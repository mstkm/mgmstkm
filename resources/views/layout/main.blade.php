<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('title')
        <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
        @yield('style')
    </head>
<body>
    @yield('content')
    @yield('script')
</body>
</html>
