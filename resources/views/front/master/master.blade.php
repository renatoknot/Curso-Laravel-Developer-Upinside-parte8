<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @include('sweetalert::alert')
</body>
</html>
