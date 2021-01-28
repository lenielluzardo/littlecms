<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{URL::to('./css/index.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('./css/all.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('./css/admin.css')}}" type="text/css">
  <title>Leniel Luzardo</title>
</head>
<body>


@include('partials.header')

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->

<!--                                 M A I N    C O N T E N T                                      -->

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->

<main id="main-container">

    <div id="back-button-container">
      <img id="back-button" src="{{URL::to('./assets/back_button.svg')}}" alt="backward">
    </div>

    <div class="sections-container">
        @yield('content')
    </div>
</div>

  <script src="./js/index.js"></script>
</body>
</html>
