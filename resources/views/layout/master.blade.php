<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/svg" width="16px" height="16px" href="{{URL::to('./assets/icons/web-icon.svg')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('./css/index.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('./css/all.css')}}" type="text/css">
  <title>{{config('app.name')}}</title>
</head>
<body>



{{-- @include('partials.notification') --}}
@include('partial.header')

<section id="main-section-container">
    <nav height="50" id="breadcrumbs">BREADCRUMBS</nav>
    <main id="main-content-container">
        @yield('content')
    </main>
</section>

@include('partial.sidebar')
@include('partial.footer')

<script src="./js/app.js"></script>
</body>
</html>


