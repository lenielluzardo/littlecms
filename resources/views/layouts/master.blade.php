<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/svg" width="16px" height="16px" href="{{URL::to('./assets/icons/web-icon.svg')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('./css/index.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('./css/all.css')}}" type="text/css">
  <title>{{config('app.name')}}</title>
</head>
<body>


@include('partials.header')

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->

<!--                                 M A I N    C O N T E N T                                      -->

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->

<main id="main-container">


    <div id="web-back-icon-container">
        <a href="{{URL::previous()}}">
            <img id="web-back-icon" src="{{URL::to('./assets/icons/web-back-icon.svg')}}" alt="go-back">
        </a>
    </div>

    <div class="sections-container">
        @yield('content')
    </div>
</div>

  <script src="./js/app.js"></script>
</body>
</html>
