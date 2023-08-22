<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
     

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- possiveis erros aqui -->
    <link href="{{ asset('lib/bootstrap/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/fonteawesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head> 
<body class ="app sidebar-mini rtl" >
    <header> 
          @include('layouts.header')
    </header>
 
    <aside>
        @include('layouts.sidebar')
    </aside> 

        <main class="app-content">
            @yield('content')
        </main>
    </div>
    
        <!-- Scripts -->
        <script src="{{ asset('lib/bootstrap/js/jquery-3.3.1.min.js') }}" defer></script>
        <script src="{{ asset('lib/bootstrap/js/main.js') }}" defer></script>
        <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('lib/bootstrap/js/bootstrap/popper.min.js') }}" defer></script>
</body>
</html>
