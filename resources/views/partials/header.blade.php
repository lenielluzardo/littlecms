<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->

<!--                                S I T E   H E A D E R                                          -->

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->
<header id="header-container">

    <!-- ====================== L O G O T Y P E   &   N A V   I C O N ====================== -->
    <div id="header-mobile-container">
        <a id="home-link" href="{{ route('welcome') }}">
            <div id="logotype-container">
                <img id="logo" src="{{ URL::to('./assets/icons/web-icon.svg') }}" alt="web-icon">
                <h1 id="type">{{ config('app.name') }}</h1>
            </div>
        </a>
        <img id="mobile-nav-icon" src="{{ URL::to('./assets/icons/mobile-nav-icon.svg') }}" alt="navigation-icon">
    </div>

    <!-- ====================== N A V I G A T I O N   M E N U ====================== -->
    <nav id="nav-menu" class="hidden">
        <div id="mobile-nav-menu">
            <nav class="nav-components-container">
                <ul class="nav-components">
                    @foreach ($sections as $section)
                        @if ($section->category === 'web' && $section->route != 'portfolio')
                            <a href="{{ route($section->route) }}">
                                <li class="nav-component section">{{ $section->name }}</li>
                            </a>
                        @endif
                        @if ($section->category === 'web' && $section->route === 'portfolio')
                            <a href="{{ route($section->route, strtolower($section->name)) }}">
                                <li class="nav-component section">{{ $section->name }}</li>
                            </a>
                        @endif
                    @endforeach
                </ul>
            </nav>

            <nav class="nav-components-container">
                <ul class="nav-components">
                    @foreach ($sections as $section)
                        @if ($section->category === 'social')
                            <li class="nav-component"><a target="_blank"
                                    href="{{ $section->url }}">{{ $section->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </nav>
        </div>
    </nav>
</header>
