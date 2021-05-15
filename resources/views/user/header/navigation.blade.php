<!-- ===== N A V I G A T I O N ===== -->

<nav id="header-navigation" class="header-navigation-container">
    <ul>

        @foreach ($items as $item)
            {{-- @if ($item->category === 'web' && $item->route != 'portfolio') --}}
                <a href="{{ route($item->route_name, $item->url) }}">
                    <li>
                        {{ $item->title }}
                    </li>
                </a>
                {{-- @endif --}}

                {{-- @if ($item->category === 'web' && $item->route === 'portfolio')
                    <a href="{{ route($item->route, strtolower($item->name)) }}">
                        <li>
                            {{ $item->name }}
                        </li>
                    </a>
            @endif --}}
        @endforeach

    </ul>
</nav>
