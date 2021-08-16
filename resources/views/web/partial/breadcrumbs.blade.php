<!-- ===== B R E A D C R U M B S ===== -->
<nav id="breadcrumbs" class="breadcrumbs">
    <ol class="path">
        @foreach ($paths as $path)
            <li> /
                {{-- {{dd($path['route_values'])}} --}}
                <a href="{{ route($path['route_name'], $path['route_values']) }}">
                    {{$path['path_name']}}
                </a> 
            </li>
        @endforeach
    </ol>
</nav>

