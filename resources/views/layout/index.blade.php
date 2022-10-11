<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/pages/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/modal.css') }}">
    <title>Tracking Expenses || @yield('title')</title>
    @stack('css')
</head>
<body id="body">
    @include('common.sidebar')
    <div class="wrapper">
        @include('common.nav')
        @yield('content')
    </div>
    @stack('js')
    <script src="{{ asset('js/common.js') }}"></script>
</body>
</html>
