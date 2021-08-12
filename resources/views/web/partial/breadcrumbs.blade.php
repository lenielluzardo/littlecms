<!-- ===== B R E A D C R U M B S ===== -->
<nav id="breadcrumbs" class="breadcrumbs">

    {{-- <div id="previous-button" class="previous-button box-container" onclick="location.href= '{{URL::previous()}}'">
        <div class="previous-button-arrow"  ><< </div>
        <div class="previous-button-label">Previous</div>
    </div> --}}

    <ol class="path">
        @yield('path')
    </ol>


    {{-- @include('auth.session') --}}

</nav>

