<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="theme-color" content="#081638">

    <link rel="icon" sizes="192x192" href="img/icone-192.png">
    <title>Bentley Brasil</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="192x192" href="img/icone-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="img/icone-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/icone-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="img/icone-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icone-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icone-16.png">
    <link rel="apple-touch-icon" href="img/icone-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icone-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icone-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/icone-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/icone-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icone-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icone-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icone-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icone-180.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}

    {{-- jquery --}}
    {{-- <script src="{{ asset('jq/JQuery.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <style></style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app" class="wrapper">

        {{-- Incluindo uma página inteira aqui --}}
        @include('layouts.menu-lateral');

        {{--  @include('auth.login') --}}

        <div class="content-wrapper">
            <div class="col-sm-12">
                @yield('navbar')
            </div>

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                            @yield('title')
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Dashboard</a>
                                </li>

                                @yield('breadcrumb')
                            </ol>
                        </div>

                    </div>
                </div>
            </section>

            @if (session('alert'))
                <div class="alert alert-info">
                    {{ session('alert') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Satellite Broadband Networks</b> 1.0-rc
            </div>
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io"> Bentley Brasil - Sistema
                    Administrativo</a>.</strong> Todos
            os direitos reservados
        </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/cep-api.js') }}" defer></script>

</body>

</html>
