<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/prism.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prism.css') }}" rel="stylesheet">

    
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <br>
        <div class="container">
            @yield('content')
        </div>  
    </div>

    <!-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> -->

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

    <hr>
    <!-- Footer Elements -->
    <footer>
        <div class="footer-copyright text-center py-3">
            SynHigh <br>
            Developed by : Amanur Rahman <br>
            ©2019 Copyrights
        </div>
    </footer>

</body>
</html>