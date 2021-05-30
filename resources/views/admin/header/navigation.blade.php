<!-- ===== N A V I G A T I O N ===== -->
<nav id="header-navigation-container">
    <ul id="header-navigation-list">

        @foreach ($modules as $module)

            <li>
                <a class="navigation-item" href="{{ route($module->route) }}">
                    {{ $module->name }}
                </a>
            </li>

        @endforeach

    </ul>
</nav>
