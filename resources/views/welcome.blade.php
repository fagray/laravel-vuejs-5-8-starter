<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>url.bio</title>
    </head>
    <body>
        <div id="app">
            <router-link to="links"> List Links </router-link>
            <router-view> </router-view>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
