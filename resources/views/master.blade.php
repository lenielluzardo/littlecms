<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/svg" width="16px" height="16px" href="{{URL::to('./assets/icons/web-icon.svg')}}" type="text/css">

        @yield('stylesheets')

        <link rel="stylesheet" href="{{asset('/css/all.css')}}" type="text/css">

        <script src="{{asset('/js/jquery-3.6.0.min.js')}}"></script>

        <title>{{config('app.name')}} | @yield('title')</title>

    </head>

    <body>

        @yield('layout')

    </body>
    
</html>


