<!-- ===== B R E A D C R U M B S ===== -->
<nav id="breadcrumbs" class="breadcrumbs-container">

    <div id="previous-button" class="previous-button box-container" onclick="location.href= '{{URL::previous()}}'">
        <div class="previous-button-arrow"  ><< </div>
        <div class="previous-button-label">Previous</div>
    </div>

    <div class="path-container">
        @yield('path')
    </div>
</nav>
