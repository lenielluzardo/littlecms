<!-- # # # # # # # # # # # # # -->
<!--       L O G O T Y P E     -->
<!-- v v v v v v v v v v v v v -->

<div id="header-logotype-container">
    <a href="{{ url('/') }}">
    <img id="logotype" src="{{ URL::to('./assets/icons/web-icon.svg') }}" alt="web-icon">
    <h1 id="title">{{ config('app.name') }}</h1>
    </a>
    <div id="mobile-nav-icon-container">
        <img src="{{ URL::to('./assets/icons/mobile-nav-icon.svg')}}" alt="">
    </div>
</div>
