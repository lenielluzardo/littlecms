<!-- # # # # # # # # # # # # # -->
<!--        H E A D E R        -->
<!-- v v v v v v v v v v v v v -->
<header id="header-section-container">

    <!-- # # # # # # # # # # # # # -->
    <!-- L O G I N / L O G O U T   -->
    <!-- v v v v v v v v v v v v v -->

    <ul class="admin-nav-list">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="admin-nav-item">
                    <a class="admin-nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

        @else
            <li class="admin-nav-item">
                <a class="admin-nav-link" href="#">
                    {{ Auth::user()->nickname }}
                </a>

                <div class="admin-nav-item-container">
                    <a class="admin-nav-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>

    <!-- # # # # # # # # # # # # # -->
    <!--    N A V I G A T I O N    -->
    <!-- v v v v v v v v v v v v v -->

        <nav id="header-navigation-container">
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
