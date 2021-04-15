<!-- # # # # # # # # # # # # # -->
<!--        H E A D E R        -->
<!-- v v v v v v v v v v v v v -->

<header id="header-section-container">

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

<!-- # # # # # # # # # # # # # -->
<!--    N A V I G A T I O N    -->
<!-- v v v v v v v v v v v v v -->

    <nav id="header-navigation-container" class="hidden">
        <ul id="header-navigation-list">

            @foreach ($sections as $section)
                @if ($section->category === 'web' && $section->route != 'portfolio')
                    <li>
                        <a class="navigation-item" href="{{ route($section->route) }}">
                            {{ $section->name }}
                        </a>
                    </li>
                    @endif

                    @if ($section->category === 'web' && $section->route === 'portfolio')
                        <li>
                            <a class="navigation-item" href="{{ route($section->route, strtolower($section->name)) }}">
                                {{ $section->name }}
                            </a>
                        </li>
                @endif
            @endforeach

        </ul>
    </nav>
</header>
