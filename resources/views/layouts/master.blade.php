<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/app.css" type="text/css">
  <title>Leniel Luzardo</title>
</head>
<body>


@include('partials.header')

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->

<!--                                 M A I N    C O N T E N T                                      -->

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->


<div id="body-container">

  <div id="back-button-container">
    <img id="back-button" src="./assets/back_button.svg" alt="backward">
  </div>

  <main id="main">

<!-- ====================== M O S T   R E C E N T   P U B L I C A T I O N ====================== -->

    @yield('content')

<!--  ====================== R E L A T E D   P U B L I C A T I O N  ====================== -->


  </main>


@include('partials.footer')

</div>

  <script src="./js/index.js"></script>
</body>
</html>
