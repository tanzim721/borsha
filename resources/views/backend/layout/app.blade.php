<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @livewireStyles
    </head>
    <body class="">

        @include('backend.layout.menu')

        @yield('content')


        @livewireScripts
    </body>
</html>