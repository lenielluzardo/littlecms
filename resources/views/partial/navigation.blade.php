<!-- ===== N A V I G A T I O N ===== -->

<nav id="header-navigation" class="header-navigation-container">
    <ul>

        @foreach ($modules as $module)

           <a href="{{ route($module->route_name, $module->url) }}">
                <li>
                    {{ $module->title }}
                </li>
            </a>

        @endforeach

    </ul>
</nav>
