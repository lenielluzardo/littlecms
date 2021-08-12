<!-- ===== N A V I G A T I O N ===== -->

<nav class="navigation">
    <ul class="navigation-modules">

        @foreach ($modules as $module)
            <a href="{{ route( $module->web_route)}}">
                <li class="navigation-modules-module">
                  
                    <i class="navigation-modules-module-label_icon fa fa-{{ $module->icon }}"></i>
                    <h4 class="navigation-modules-module-label_name">{{ $module->name }}</h4>
                        
                </li>
            </a>
        @endforeach

    </ul>
</nav>
