<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    @hasSection ('css')
        @yield('css')
    @endif
</head>
<body>

    @include('front.includes.header')

    <div class="container py-3">
        <div class="row">

            <div class="col-8">
                @yield('content')
            </div>

            <div class="col-4">
                {{-- @yield('sidebar') --}}
                @section('sidebar')
                    <h1>Últimos postados</h1>
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Dolorem, repudiandae nobis? Atque, doloribus.</li>
                        <li>Nobis nemo consequatur voluptatem soluta?</li>
                        <li>Exercitationem iusto maiores ipsam repellat.</li>
                        <li>Laborum dolorem animi facere in.</li>
                    </ul>
                @show
            </div>

        </div>
    </div>

    @include('front.includes.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @hasSection ('js')
        @yield('js')
    @endif
</body>
</html>
