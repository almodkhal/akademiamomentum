<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet" type="text/css"> --}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @guest
        @include('partials.nav')
        <main class="py-4">
            <div class="container">
                @include('partials.messages')
                @yield('content')
            </div>

        </main>

        @else
        {{-- Admin Panel --}}
        <div id="wrapper">
            @include('partials.admin.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include('partials.admin.nav')
                    <main class="py-4">
                        <div class="container">
                            @include('partials.messages')
                            @yield('content')
                        </div>

                    </main>
                </div>
            </div>
        </div>
        @endguest
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
