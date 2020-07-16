<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Rotary Club Porto Oeste landing page">

    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/custom.css')}} ">

    {{-- Stylesheets vindo do tema seleccionado --}}
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/landing-page/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('css/landing-page/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/landing-page/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/landing-page/css/landing-page.min.css')}}" rel="stylesheet">

    <title>RC Porto-Oeste</title>
</head>
<body>
    @if (FALSE) {{-- Alterar para TRUE se houver situação de alerta --}}
        @component('components.alert')

        @endcomponent
    @endif

    {{-- Navbar --}}
    @component('components.navbar')

    @endcomponent

    {{-- body of page --}}
    @yield('body')

    {{-- footer --}}
    @component('components.footer')

    @endcomponent

    {{-- import scripts --}}
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
