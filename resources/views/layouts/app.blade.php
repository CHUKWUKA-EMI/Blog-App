<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}


</head>
<body>
    <div id="app">
        @include('inc.navbar')
        @include('inc.messages')
        <main class="container">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src={{asset('ckeditor/ckeditor.js')}}></script>
      <script>
      CKEDITOR.replace( 'body' );
      </script>
</body>
</html>
