<!-- ===== N A V I G A T I O N ===== -->

<nav id="header-navigation" class="header-navigation-container">
    <ul>

        @foreach ($modules as $module)
       
           {{-- <a href="{{ route($module->route, $module->url) }}"> --}}
            {{-- <a href="{{ route( strtolower($module->web_route))}}">    --}}
                <a href="{{ route( $module->web_route)}}">
                <li>
                    {{ $module->name }}
                </li>
            </a>

        @endforeach

    </ul>
</nav>
