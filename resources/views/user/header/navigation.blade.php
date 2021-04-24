<!-- ===== N A V I G A T I O N ===== -->

<nav id="header-navigation" class="header-navigation-container">
    <ul>

        @foreach ($sections as $section)
            @if ($section->category === 'web' && $section->route != 'portfolio')
                <a href="{{ route($section->route) }}">
                    <li>
                        {{ $section->name }}
                    </li>
                </a>
                @endif

                @if ($section->category === 'web' && $section->route === 'portfolio')
                    <a href="{{ route($section->route, strtolower($section->name)) }}">
                        <li>
                            {{ $section->name }}
                        </li>
                    </a>
            @endif
        @endforeach

    </ul>
</nav>
