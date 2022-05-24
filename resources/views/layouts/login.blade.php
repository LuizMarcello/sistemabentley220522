<!doctype html>
{{-- Esse é o template de todo o  login --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
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
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app" class="wrapper">

        <div>
            @yield('content')
        </div>

    </div>
</body>

</html>
