<!-- ===== N A V I G A T I O N ===== -->

<nav id="header-navigation" class="header-navigation-container hidden">
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
