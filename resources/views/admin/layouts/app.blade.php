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
    <script src="https://kit.fontawesome.com/2a2d3304a4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('admin.layouts._navbar')

        <main>
            <div class="flex justify-between">
                <div class="w-1/6">
                    @include('admin.layouts._sidebar-dashboard')
                </div>

                <div class="w-5/6 px-10 mt-16 mb-6">
                    <h1 class="font-bold text-2xl my-4">
                        @yield('title')
                    </h1>

                    <div class="my-2">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="http://unpkg.com/turbolinks"></script>
</body>
</html>
